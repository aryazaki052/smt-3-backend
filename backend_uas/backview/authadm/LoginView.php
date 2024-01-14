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
  <link rel="stylesheet" href="../assets/login/login.css">
</head>
<body>




<div class="wrapper">
        <div class="justify-content-center d-flex">
            <img src="../assets/login/logonew.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Bali Tracking & Tour
        </div>
        <form class="p-3 mt-3" method="post" action="LoginAct.php">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3" name="login">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="RegisterView.php">Sign up</a>
        </div>
    </div>
</body>
</html>