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
