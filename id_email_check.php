<?php
    $id_check = "SELECT id FROM register WHERE id = '$id'";
    $email_check = "SELECT email FROM register WHERE email = '$email'";
    $id_check = $conn->query($id_check);
    $email_check = $conn->query($email_check);
    
    if ($id_check->num_rows > 0) {
        echo "<script>console.log('registered id');histroy.back();</script>";
        $conn->close();
        exit;
    }
    if ($email_check->num_rows > 0) {
        echo "<script>console.log('registered email');histroy.back();</script>";
        $conn->close();
        exit;
    }
?>