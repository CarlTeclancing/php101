<?php
require(__DIR__ . '/../db/connect.php');
$name = $email = $password ="";
$nameErr = $emailErr = $passwordErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(empty($_POST['name'])){
        $nameErr = "name is required";
     }else{
        $name = test_input($_POST["name"]);
     }
     if(empty($_POST["passsword"])){
        $passswordErr = "passsword is required";
     }else{
        $passsword = test_input($_POST["passsword"]);
     }
     if(empty($_POST['email'])){
        $emailErr = "email is required";
     }else{
        $email = test_input($_POST['email']);
     }

     $hash = password_hash($passsword, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hash')";
        if($conn->query($sql) === TRUE){
            header("Location: ../login.php");
            exit();
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
         $conn->close();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>