<?php

class Loginadm extends Controller {
  public function index() {
      $this->view('backend/metaadm/meta');
      $this->view('backend/authadm/login');
      $this->view('backend/footer/footer');
  }

  public function authenticate() {
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
          $username = $_POST["userName"];
          $password = $_POST["password"];

          $userModel = $this->model('UseradminModel');
          $user = $userModel->getUserByUsername($username);

          if ($user && password_verify($password, $user['pass_admin'])) {
              if (session_status() == PHP_SESSION_NONE) {
                  session_start();
              }
              $_SESSION["username"] = $username;
              $_SESSION["is_logged_in"] = true;
              header("Location: backend/dashboard/index");
              exit();
          } else {
              if (session_status() == PHP_SESSION_NONE) {
                  session_start();
              }
              $_SESSION["error"] = 'Invalid username or password.';
              header("Location: backend/authadm/login");
              exit();
          }
      }
  }
}

?>
