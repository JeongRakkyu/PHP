<?php
    function clear_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $id = clear_data($_POST['id']);
    $pw = clear_data($_POST['pw']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $addr = clear_data($_POST['addr']);
    $sex = clear_data($_POST['sex']);

    if (!preg_match("/^[a-zA-Z _0-9]*$/", $id)) {
        echo "<script>alert('input correct id');</script>";
        exit;
    }
    if (!preg_match("/^[a-zA-Z0-9_!@#$%^&*]*$/", $pw)) {
        echo "<script>alert('input correct pw');</script>";
        exit;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else {
        echo "<script>console.log('$email');alert('input correct email');</script>";
        exit;
    }

    $pw = md5($pw);

    include 'setting.php';

    echo "<script>alert('accepted register!');location.replace('login.php');</script>";
?>