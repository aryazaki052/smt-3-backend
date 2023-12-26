<?php
require_once __DIR__ . '/../core/DB.php';

class UseradminModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM user_admin WHERE username_admin = :username");
        $stmt->execute(['username' => $username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
