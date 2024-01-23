<?php

include('DBClass.php');

class Keranjang extends database
{
  public $con;

  function __construct()
  {
    parent::__construct();
  }

  public function uploadKeranjang($idTracking, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan, $idGuide)
  {
    // Masukkan data ke dalam database
    $query = "INSERT INTO keranjang_tracking (id_tracking, nama_depan, nama_belakang, no_hp, email, tanggal_pesan, id_guide) VALUES ('$idTracking', '$namaDepan', '$namaBelakang', '$noHp', '$email', '$tanggalPesan', '$idGuide')";
    $result = mysqli_query($this->con, $query);

    return $result;
  }
  public function uploadKeranjangTour($idTracking, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan, $idGuide)
  {
   
  }



    
}
