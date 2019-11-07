<?php
require('dbConnect.php');
date_default_timezone_set('Asia/Jakarta');
session_start();

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "select * from user where email='$email' and password='$password'";

    $login = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($login);
    $data = mysqli_fetch_assoc($login);

    if ($cek == 1) {
        $_SESSION['name'] = $data['fullname'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['role'] = 'member';
        $_SESSION['id'] = $data['id'];

        header('location: ../dashboard.php');
    } else {
        header('location: login.php?error=1');
    }
}
