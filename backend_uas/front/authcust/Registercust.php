<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../../backview/assets/login/login.css">
</head>
<body>

<?php
include "../../class/back/AuthCustCLass.php"; // Menggunakan file Auth.php yang berisi kelas Auth
$auth = new AuthCust(); // Membuat objek dari kelas Auth

if (isset($_POST['register'])) {
    $registrationData = array(
        'usname' => $_POST['usname'],
        'email' => $_POST['email'],
        'pass' => $_POST['pass']
    );

    $result = $auth->register($registrationData);
    echo $result;
}
?>

<div class="wrapper">
    <div class="justify-content-center d-flex">
        <img src="./../backview/assets/login/logonew.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Bali Tracking & Tour
    </div>
    <form class="p-3 mt-3" method="post" action="">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="usname" id="userName" placeholder="Username" required>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="userEmail" placeholder="Email" required>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="pass" id="pwd" placeholder="Password" required>
        </div>
        <button type="submit" class="btn mt-3" name="register">Register</button>
    </form>
</div>

</body>
</html>
