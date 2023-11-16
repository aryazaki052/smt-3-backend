<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php
session_start(); // Mulai sesi

// Koneksi ke database (sesuaikan dengan detail koneksi Anda)
include "../koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['userName'];
    $password = $_POST['password'];
    
    // Query untuk memeriksa keberadaan admin
    $query = "SELECT * FROM admin_user WHERE usname_admin='$username' AND pass_admin='$password'";
    $result = mysqli_query($kon, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Admin ditemukan, set session dan arahkan ke halaman admin.php
            $_SESSION['admin'] = $username;
            header("Location: admin.php");
            exit();
        } else {
            echo "Login gagal. Username atau password salah.";
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
            <img src="css/logo1.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            ITB STIKOM BALI
        </div>
        <form class="p-3 mt-3" method="post" action="login.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
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