<?php
include "../../koneksi.php"; // Pastikan file koneksi.php sudah sesuai dengan konfigurasi Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $tanggal_post = date("Y-m-d H:i:s"); // Gunakan waktu sekarang sebagai tanggal_post

    // Proses upload dokumen
    $targetDir = "unggah/"; // Folder untuk menyimpan dokumen
    $dokumenName = $_FILES["dokumen"]["name"];
    $targetFilePath = $targetDir . $dokumenName;

    // Mendapatkan ekstensi file
    $fileType = pathinfo($_FILES["dokumen"]["name"], PATHINFO_EXTENSION);

    // Cek apakah file adalah dokumen yang diizinkan
    $allowedTypes = array('doc', 'docx', 'pdf');
    if (in_array($fileType, $allowedTypes)) {
        // Pindahkan file ke folder uploads
        move_uploaded_file($_FILES["dokumen"]["tmp_name"], $targetFilePath);

        // Masukkan data ke database (simpan nama file saja, tanpa direktori)
        $query = "INSERT INTO pengumuman (judul_pengumuman, deskripsi, tgl_post, dokumen) VALUES ('$judul', '$deskripsi', '$tanggal_post', '$dokumenName')";
        $result = mysqli_query($kon, $query);

        if ($result) {
            // Redirect kembali ke halaman pengumuman.php
            header("Location: pengumuman.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($kon);
        }
    } else {
        echo "Hanya file dengan ekstensi .doc, .docx, atau .pdf yang diizinkan.";
    }
}

?>
