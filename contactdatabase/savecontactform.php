<?php 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $conn = mysqli_connect("localhost","root","","contactdb");

    $sql = "INSERT INTO contactinfo (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Thank you for contacting us!');</script>";
        echo "<script>window.location.href = '../index.php';</script>";
      }else{
        echo "<script>alert('Please try again.');</script>";
        echo "<script>window.location.href = '../index.php';</script>";
      }


?>