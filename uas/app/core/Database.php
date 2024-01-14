<?php

// // app/core/Database.php

// class Database
// {
//     private $host;
//     private $username;
//     private $password;
//     private $database;
//     private $charset;
//     private $pdo;

//     public function __construct()
//     {
//         $config = require_once('../app/config/database.php');

//         $this->host     = $config['host'];
//         $this->username = $config['username'];
//         $this->password = $config['password'];
//         $this->database = $config['database'];
//         $this->charset  = $config['charset'];

//         $this->connect();
//     }

//     public function connect()
//     {
//         try {
//             $dsn = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset}";
//             $options = [
//                 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                 PDO::ATTR_EMULATE_PREPARES   => false,
//             ];

//             $this->pdo = new PDO($dsn, $this->username, $this->password, $options);

//             return $this->pdo;
//         } catch (PDOException $e) {
//             throw new PDOException($e->getMessage(), (int)$e->getCode());
//         }
//     }

//     public function getPDO()
//     {
//         return $this->pdo;
//     }

//     // Metode-metode lain untuk berinteraksi dengan database dapat ditambahkan di sini
// }

// // Contoh penggunaan
// $database = new Database();
// $connection = $database->getPDO();
// // Selanjutnya, Anda dapat menggunakan $connection untuk melakukan query ke database.


class Database {
  private $host = 'localhost';
  private $db_name = 'bali_tour';
  private $username = 'root';
  private $password = '';
  private $conn;

  public function connect() {
    $this->conn = null;

    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, 
      $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'Connection Error: ' . $e->getMessage();
    }
    return $this->conn;
    
  }

  
}
?>  