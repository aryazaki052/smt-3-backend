<?
require_once '../model/Registeradminmodel.php';
$this->model('Registeradm');
class Registeradm {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            $result = $this->model->register($nama, $userName, $password);

            if ($result) {
                // Redirect ke halaman login
                header('Location: /backend/uas/public/Loginadm/login');
            } else {
                // Tampilkan pesan error
            }
        }
    }
}