<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("<script>console.log('$conn->connect_error');</script>");
        exit;
    }
    echo "<script>console.log('connection success');</script>";
?>