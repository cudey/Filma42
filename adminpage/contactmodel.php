<?php 

    $conn = mysqli_connect("localhost","root","","contactdb");

    $select = "SELECT * FROM contactinfo";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);

    return $row;
?>