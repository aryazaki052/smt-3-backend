<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../../back/css/login.css">
</head>
<body>

<?php
session_start(); // Mulai sesi

// Koneksi ke database (sesuaikan dengan detail koneksi Anda)
include "../../koneksi.php";

if (isset($_POST['login'])) {
  $nim = $_POST['userName'];
  $password = $_POST['password'];

    // Query untuk memeriksa keberadaan mahasiswa
    $query = "SELECT * FROM login_mhs WHERE NIM='$nim' AND pass_mhs='$password'";
    $result = mysqli_query($kon, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Mahasiswa ditemukan, set session dan arahkan ke halaman index.php
            $_SESSION['NIM'] = $nim;

            header("Location: ../sion.php");
            exit();
        } else {
            echo "Login gagal. NIM atau password salah.";
        }
    } else {
        echo "Error: " . mysqli_error($kon);
    }
}

// Tutup koneksi database
mysqli_close($kon);
?>


<div class="wrapper">
        <div class="logo">
            <img src="../../back/css/logo1.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            ITB STIKOM BALI
        </div>
        <form class="p-3 mt-3" method="post" action="login_mhs.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="NIM">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3" name="login">Login</button>
        </form>
        <!-- <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div> -->
    </div>
</body>
</html>