// index.php

require_once '../app/core/Database.php';
require_once '../app/controllers/AuthController.php'; // Pastikan path ini sesuai

$database = new Database();
$db = $database->connect();

// Instansiasi AuthController
$authController = new AuthController($db);

// Tentukan rute untuk login dan register
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'login') {
            $authController->login($_POST['username'], $_POST['password']);
        } elseif ($_POST['action'] === 'register') {
            $authController->register($_POST['username'], $_POST['password']);
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['page'])) {
        if ($_GET['page'] === 'login') {
            $authController->showLoginForm();
        } elseif ($_GET['page'] === 'register') {
            $authController->showRegisterForm();
        }
    }
}

// ... (kode lain)
