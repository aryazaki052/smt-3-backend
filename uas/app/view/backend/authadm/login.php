<?php
// session_start(); // Mulai sesi di awal
// if (isset($_SESSION["error"])) {
//     echo $_SESSION["error"];
//     unset($_SESSION["error"]); // Hapus pesan kesalahan dari sesi setelah ditampilkan
// }
?>
<!-- 
<div class="wrapper">
        <div class="d-flex justify-content-center">
            <img src="<?=BASEURL; ?>/img/logonew.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Bali Tracking Tour
            Halo Admin
        </div>
        <form class="p-3 mt-3" method="post" action="/backend/uas/public/Loginadm/authenticate">
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
        <a href="<?=BASEURL; ?>/register">
          <button type="submit" class="btn mt-3" name="login">Register</button>
        </a>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div> -->
    
    <!-- app/views/auth/login.php -->

<h1>Login Form</h1>
<form action="index.php?page=login" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="hidden" name="action" value="login">
    <input type="submit" value="Login">
</form>
