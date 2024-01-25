<?php

include('DBClass.php');

class Keranjang extends database
{
  public $con;

  function __construct()
  {
    parent::__construct();
  }

  public function uploadKeranjang($idTracking, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan, $idGuide, $price)
  {
    // Masukkan data ke dalam databas
    $query = "INSERT INTO keranjang_tracking (id_tracking, nama_depan, nama_belakang, no_hp, email, tanggal_pesan, id_guide, price) VALUES ('$idTracking', '$namaDepan', '$namaBelakang', '$noHp', '$email', '$tanggalPesan', '$idGuide', '$price')";
    $result = mysqli_query($this->con, $query);

    return $result;
  }
  public function uploadKeranjangTour($idtour, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan, $idGuide)
  {
    $query = "INSERT INTO keranjang_tour (id_tour, nama_depan, nama_belakang, no_hp, email, tanggal_pesan, id_guide) VALUES ('$idtour', '$namaDepan', '$namaBelakang', '$noHp', '$email', '$tanggalPesan', '$idGuide')";
    $result = mysqli_query($this->con, $query);

    return $result;
  }
  public function uploadKeranjangTransport($id_trans, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan)
  {
    $query = "INSERT INTO keranjang_trans (id_trans, nama_depan, nama_belakang, no_hp, email, tanggal_pesan) VALUES ('$id_trans', '$namaDepan', '$namaBelakang', '$noHp', '$email', '$tanggalPesan')";
    $result = mysqli_query($this->con, $query);

    return $result;
  }
}
