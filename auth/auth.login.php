<?php
require(__DIR__ . '/../db/connect.php');
session_start();

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: ../dashboard/index.php");
    exit();
}

$name = $email = $password = "";
$nameErr = $emailErr = $passwordErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
    
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST['email']);
    }

       $sql = "SELECT * FROM user WHERE email = '$email'";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
           $row = $result->fetch_assoc();
           if (password_verify($password, $row['password'])) {

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];

               header("Location: ../dashboard/index.php");
               exit();
           } else {
               $passwordErr = "Invalid password";
           }
       } else {
           $emailErr = "No user found with this email";
       }
   }
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn->close();