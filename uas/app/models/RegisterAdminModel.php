<?

class Model {
  private $db;

  public function __construct() {
      // Buat koneksi ke database
      $this->db = new PDO('mysql:host=localhost;dbname=uas_backend', 'root', '');
  }

  public function register($nama, $userName, $password) {
      // Enkripsi password
      $password = password_hash($password, PASSWORD_DEFAULT);

      // Siapkan pernyataan SQL
      $stmt = $this->db->prepare('INSERT INTO users (name, email, password) VALUES (nama, userName, password)');

      // Eksekusi pernyataan SQL
      $result = $stmt->execute([$nama, $userName, $password]);

      // Return hasil
      return $result;
  }
}
