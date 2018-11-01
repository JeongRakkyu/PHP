<?php
    function clear_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = clear_data($_POST['id']);
    $pw = clear_data($_POST['pw']);

    include 'config.php';

    $id_check = $conn->query("SELECT id FROM register WHERE id = '$id'");
    $pw_check = $conn->query("SELECT pw FROM register WHERE id = '$id'")->fetch_assoc();

    if ($id_check->num_rows > 0 && password_verify($pw, $pw_check['pw']) === TRUE) {
        session_start();
        $_SESSION['id'] = $id;
        echo "<script>location.replace('main.html');</script>";
        $conn->close();
        exit;
    } else {
        echo "<script>alert('incorrect information');history.back();</script>";
        $conn->close();
        exit;
    }
?>