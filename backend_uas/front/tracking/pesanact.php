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
    $price = $_POST["price"];

    // Mendapatkan ID Tracking, sesuaikan dengan cara Anda mendapatkan ID Tracking
    $idTracking = $_POST["id_tracking"]; // Ganti dengan cara Anda mendapatkan ID Tracking

    // Memasukkan data ke dalam tabel keranjang
    $result = $keranjang->uploadKeranjang($idTracking, $namaDepan, $namaBelakang, $noHp, $email, $convertedDate, $selectedGuide, $price);

    if ($result) {
        // Mendapatkan ID keranjang yang baru saja di-insert
        $idKeranjang = mysqli_insert_id($keranjang->con);

        // Redirect ke halaman checkout dengan membawa parameter id_keranjang
        header("Location: ../midtrans/examples/snap/checkout.php?id_keranjang=$idKeranjang");
        exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
    } else {
        echo "Error: " . mysqli_error($keranjang->con);
    }
}
?>
