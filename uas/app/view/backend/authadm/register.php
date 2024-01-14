<!-- 
<div class="wrapper">
        <div class="d-flex justify-content-center">
            <img src="<?=BASEURL; ?>/img/logonew.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Bali Tracking Tour
            Halo Admin
        </div>
        <form class="p-3 mt-3" method="post" action="/backend/uas/public/Registeradm/Registeradm">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="nama" id="userName" placeholder="Nama Admin">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3" name="login">Register</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div> -->
    <!-- app/views/auth/register.php -->

<h1>Register Form</h1>
<form action="index.php?page=register" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="hidden" name="action" value="register">
    <input type="submit" value="Register">
</form>
