<?php
// require_once __DIR__ . '/../core/DB.php';

// class UseradminModel {
//   private $db;

//   public function __construct() {
//       $this->db = (new Database())->connect();
//   }

//   public function getUserByUsername($username) {
//       $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :username");
//       $stmt->execute(['username' => $username]);
//       return $stmt->fetch(PDO::FETCH_ASSOC);
//   }

//   public function createUser($nama, $username, $password) {
//       $stmt = $this->db->prepare("INSERT INTO user_admin (nama_admin, username_admin, pass_admin) VALUES (:nama, :username, :password)");
//       return $stmt->execute(['nama' => $nama, 'username' => $username, 'password' => $password]);
//   }
// }
// ?>

<?
// app/models/UserModel.php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    public function createUser($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hashedPassword]);
    }
}
