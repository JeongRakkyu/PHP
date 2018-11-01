<?php
    include 'config.php';
    include 'id_email_check.php';
    
    $register = "INSERT INTO register (id, pw, email, addr, sex) VALUES ('$id', '$pw', '$email', '$addr', '$sex')";

    if ($conn->query($register) === TRUE) {
        echo "<script>console.log('insert success');</script>";
        $conn->close();
    } else {
        echo "<script>console.log('insert failed');</script>";
        echo "$conn->error";
        $conn->close();
        exit;
    }