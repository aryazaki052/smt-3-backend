<?php
include 'DBClass.php';

class Auth extends database{
    function __construct()
    {
        parent::__construct();
    }

    function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $qry = mysqli_query($this->con, "SELECT * FROM admin_user WHERE email_admin = '$email'");

        if ($qry && $user = mysqli_fetch_assoc($qry)) {
            if (password_verify($password, $user['pass_admin'])) {
                return $user;
            }
        }

        return null;
    }

    function register($data) {
      $username = $data['usname'];
      $email = $data['email'];
      $password = $data['pass'];
      // Misalnya, Anda juga dapat menambahkan validasi lainnya sebelum menyimpan data ke database.

      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $qry = mysqli_query($this->con, "INSERT INTO admin_user (nama_admin,email_admin,pass_admin) VALUES ('$username', '$email', '$hashedPassword')");

      if ($qry) {
        header('Location: LoginView.php');
      } else {
          return "Registrasi gagal: " . mysqli_error($this->con);
      }
  }
}
?>
