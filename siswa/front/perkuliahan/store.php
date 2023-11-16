<?php
include "../../koneksi.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim']; // Ambil nilai NIM mahasiswa
    $nama = $_POST['nama']; // Ambil nilai nama mahasiswa
    $kelas_terpilih = $_POST['kelas_terpilih']; // Ambil array nilai pilihan kelas

    // Persiapkan query untuk menyimpan ke tabel krs_mahasiswa
    $query_insert_krs = "INSERT INTO krs_mahasiswa (nim, nama, kode_mk) VALUES ";

    // Tambahkan setiap nilai pilihan_mk ke dalam query
    $valueStrings = [];
    foreach ($kelas_terpilih as $kelas) {
        $valueStrings[] = "('$nim', '$nama', '$kelas')";
    }

    $query_insert_krs .= implode(", ", $valueStrings);

    // Lakukan eksekusi query untuk menyimpan data ke dalam tabel krs_mahasiswa
    $result_insert_krs = mysqli_query($kon, $query_insert_krs);

    if ($result_insert_krs) {
        // Jika penyimpanan berhasil, arahkan kembali ke halaman perkuliahan.php
        header("Location: perkuliahan.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Gagal menyimpan data KRS.";
    }
}

?>
