<?php
// Include koneksi dan kelas keranjang
include_once("../../class/back/KeranjangCLass.php");

// Membuat objek Keranjang
$keranjang = new Keranjang();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Tangkap data dari formulir
  $selectedDate = $_POST["selected_date"];
  $convertedDate = date("Y-m-d", strtotime($selectedDate));
  $namaDepan = $_POST["nama_depan"];
  $namaBelakang = $_POST["nama_belakang"];
  $noHp = $_POST["no_hp"];
  $email = $_POST["email"];
  $selectedGuide = $_POST["selected_guide"];

  // Mendapatkan ID tour, sesuaikan dengan cara Anda mendapatkan ID tour
  $idtour = $_POST["id_tour"]; // Ganti dengan cara Anda mendapatkan ID tour

  // Memasukkan data ke dalam tabel keranjang
  $result = $keranjang->uploadKeranjangTour($idtour, $namaDepan, $namaBelakang, $noHp, $email, $convertedDate, $selectedGuide); //uploadKeranjangTour

  if ($result) {
    // Redirect kembali ke halaman tracking.php atau halaman lainnya
    header("Location: ../../index.php");
    exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
  } else {
    echo "Error: " . mysqli_error($keranjang->con);
  }
}
?>
