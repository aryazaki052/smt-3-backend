<?php
session_start();
include "../../class/back/AuthClass.php";
$login = new Auth();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data_login = [
        "email" => $email,
        "password" => $password
    ];

    $data = $login->login($data_login);

    if (!empty($data) && password_verify($password, $data['pass_admin'])) {
        //berikan akses login, dengan membuat session
        $_SESSION['email_admin'] = $data['email_admin'];
        header('Location: ../dashboard.php');
    } else {
        echo "<script>alert('Login gagal, Username dan password tidak ditemukan'); window.location.href='LoginView.php';</script>";
    }
} else {
    echo "<script>alert('Harap masukkan email dan password'); window.location.href='LoginView.php';</script>";
}
?>
