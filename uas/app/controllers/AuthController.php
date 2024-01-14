<?php

// class Loginadm extends Controller {
//   public function index() {
//       $this->view('backend/metaadm/meta');
//       $this->view('backend/authadm/login');
//       $this->view('backend/footer/footer');
//   }

//   public function authenticate() {
//       if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
//           $username = $_POST["userName"];
//           $password = $_POST["password"];

//           $userModel = $this->model('UseradminModel');
//           $user = $userModel->getUserByUsername($username);

//           if ($user && password_verify($password, $user['pass_admin'])) {
//               if (session_status() == PHP_SESSION_NONE) {
//                   session_start();
//               }
//               $_SESSION["username"] = $username;
//               $_SESSION["is_logged_in"] = true;
//               header("Location: backend/dashboard/index");
//               exit();
//           } else {
//               if (session_status() == PHP_SESSION_NONE) {
//                   session_start();
//               }
//               $_SESSION["error"] = 'Invalid username or password.';
//               header("Location: backend/authadm/login");
//               exit();
//           }
//       }
//   }

//   public function register() {
//     $this->view('backend/metaadm/meta');
//     $this->view('backend/authadm/register');
//     $this->view('backend/footer/footer');
// }

// public function createAccount() {
//     if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
//         $nama = $_POST["nama"];
//         $username = $_POST["userName"];
//         $password = $_POST["password"];

//         // Hash password sebelum disimpan ke database
//         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//         $userModel = $this->model('UseradminModel');
//         $inserted = $userModel->createUser($nama, $username, $hashedPassword);

//         if ($inserted) {
//             // Redirect ke halaman login setelah berhasil mendaftar
//             header("Location: backend/authadm/login");
//             exit();
//         } else {
//             // Jika terjadi kesalahan saat menyimpan data, set pesan error
//             $_SESSION["error"] = 'Gagal membuat akun.';
//             header("Location: backend/authadm/regiter");
//             exit();
//         }
//     }
// }
// }

?>

<?
// app/controllers/AuthController.php

class AuthController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function showLoginForm() {
        // Tampilkan formulir login
        include('../app/views/auth/login.php');
    }

    public function login($username, $password) {
        // Validasi login, contoh sederhana
        $userModel = new UserModel($this->db);
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            // Login sukses, lakukan tindakan selanjutnya
            echo "Login berhasil!";
        } else {
            // Login gagal, mungkin arahkan kembali ke formulir login
            echo "Login gagal!";
        }
    }

    public function showRegisterForm() {
        // Tampilkan formulir register
        include('../app/views/auth/register.php');
    }

    public function register($username, $password) {
        // Validasi dan proses pendaftaran, contoh sederhana
        $userModel = new UserModel($this->db);
        $existingUser = $userModel->getUserByUsername($username);

        if (!$existingUser) {
            $userModel->createUser($username, $password);
            echo "Registrasi berhasil!";
        } else {
            echo "Username sudah digunakan!";
        }
    }
}

