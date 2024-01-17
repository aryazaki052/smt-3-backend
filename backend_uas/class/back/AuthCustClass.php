<?php
include ('DBClass.php');

class AuthCust extends database{
    function __construct()
    {
        parent::__construct();
    }

    function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $qry = mysqli_query($this->con, "SELECT * FROM cust_user WHERE email_cust = '$email'");

        if ($qry && $user = mysqli_fetch_assoc($qry)) {
            if (password_verify($password, $user['pass_cust'])) {
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

      $qry = mysqli_query($this->con, "INSERT INTO cust_user (nama_cust,email_cust,pass_cust) VALUES ('$username', '$email', '$hashedPassword')");

      if ($qry) {
        header('Location: Logincust.php');
      } else {
          return "Registrasi gagal: " . mysqli_error($this->con);
      }
  }
}
?>
