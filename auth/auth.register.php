<?php


$name = $email = $password ="";
$nameErr = $emailErr = $passwordErrr = "";

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

    header (Location: '../register.php');
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>