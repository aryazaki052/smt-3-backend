<?php


class database {
  public $con;

  public function __construct(){
     $this->con = mysqli_connect("localhost", "root", "", "bali_tour");

     // Check koneksi
     if (mysqli_connect_errno()) {
         die("Koneksi database gagal: " . mysqli_connect_error());
     }
  }
}
