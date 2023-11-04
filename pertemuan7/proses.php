<?php
include "koneksi.php"; // Anda membutuhkan koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = 0;
    $nama = $_POST['nama_mhs'];
    $jurusan = $_POST['kode_jurusan'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no-hp'];
    $email = $_POST['email'];

    $query = "INSERT INTO biodata (nim, nama_mhs, kode_jurusan, gender, alamat, no_hp, email) VALUES (
        '$nim','$nama', '$jurusan', '$jk', '$alamat', '$no_hp', '$email'
    )";

    $exec = mysqli_query($kon, $query);

    if ($exec) {
        // Data berhasil disimpan
        echo "Data berhasil disimpan.";
    } else {
        // Jika ada masalah dengan eksekusi query
        echo "Terjadi kesalahan: " . mysqli_error($kon);
    }
}
?>
