<?php
session_start();
include "../../class/back/AuthCustCLass.php";
$login = new AuthCust();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $data_login = [
        "email" => $email,
        "password" => $password
    ];

    $data = $login->login($data_login);

    if (!empty($data) && password_verify($password, $data['pass_cust'])) {
        //berikan akses login, dengan membuat session
        $_SESSION['email_cust'] = $data['email_cust'];
        header('Location:../../index.php');
    } else {
        echo "<script>alert('Login gagal, Username dan password tidak ditemukan'); window.location.href='Logincust.php';</script>";
    }
} else {
    echo "<script>alert('Harap masukkan email dan password'); window.location.href='Logincust.php';</script>";
}
?>
