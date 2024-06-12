<?php

if(empty($_POST["username"])){
    echo
    "<script language='javascript'> alert('Username required!')</script>";
    die;
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo
    "<script language='javascript'> alert('Email is invalid!')</script>";
    die;
}
if(!preg_match("/[0-9]/", $_POST["password"])){
    echo
    "<script language='javascript'> alert('Password should contain atleast 1 number!')</script>";
    die;
}
if($_POST["password"] !== $_POST["repeatPassword"]){
    echo
    "<script language='javascript'> alert('Passwords don\'t match')</script>";
    die;
}

$passwordhash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__."/connection.php";

$insert = "INSERT INTO userinfo (username, email, password) VALUES (?,?,?)";

$stmt = $mysqli->stmt_init();

if(! $stmt->prepare($insert)){
    die("SQL Error: ".$mysqli->error);
}

$stmt->bind_param("sss", $_POST["username"], $_POST["email"], $passwordhash);

if($stmt->execute()){
    echo "<script language='javascript'>";
    echo "alert('Sign Up Successful!');";
    echo "window.location.href = '../login.php';";
    echo "</script>";
}
?>