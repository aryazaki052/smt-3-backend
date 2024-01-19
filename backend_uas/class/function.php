<?php  
function verifdashboard(){
    session_start();
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['email_admin'])) {
        // Jika tidak, redirect ke halaman login
        header('Location: authadm/LoginView.php');
        exit();
    }
}

function verif(){
    session_start();
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['email_admin'])) {
        // Jika tidak, redirect ke halaman login
        header('Location: ../authadm/LoginView.php');
        exit();
    }
}
function sessionpesan(){
    session_start();
    // Periksa apakah pengguna sudah login
    if (!isset($_SESSION['email_cust'])) {
        // Jika tidak, redirect ke halaman login
        echo "<script>alert('Silahkan Login Terlebih Dahulu'); window.location.href='../authcust/Logincust.php';</script>";
        // header('Location: ../authcust/Logincust.php');
        exit();
    }
}
