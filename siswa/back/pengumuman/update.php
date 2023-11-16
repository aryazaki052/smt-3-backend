<?php

include "../../koneksi.php"; // Pastikan file koneksi.php sudah sesuai dengan konfigurasi Anda



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $judul = $_POST["judul"];
    $tanggal_post = date("Y-m-d H:i:s"); // Gunakan waktu sekarang sebagai tanggal_post
    $id = $_POST['id_pengumuman'];
    // Cek apakah ada dokumen baru
    if (!empty($_FILES["dokumen"]["name"])) {
        // Proses upload dokumen
        $targetDir = "unggah/"; // Folder untuk menyimpan dokumen
        $dokumenName = basename($_FILES["dokumen"]["name"]);
        $targetFilePath = $targetDir . $dokumenName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Cek apakah file adalah dokumen yang diizinkan
        $allowedTypes = array('doc', 'docx', 'pdf');
        if (in_array($fileType, $allowedTypes)) {
            // Hapus dokumen lama dari direktori unggah
            $queryGetData = "SELECT dokumen FROM pengumuman WHERE id_pengumuman = $id";
            $resultGetData = mysqli_query($kon, $queryGetData);

            if ($resultGetData) {
                $data = mysqli_fetch_assoc($resultGetData);
                if (!empty($data['dokumen'])) {
                    unlink($data['dokumen']);
                }
            }

            // Pindahkan file ke folder unggah
            move_uploaded_file($_FILES["dokumen"]["tmp_name"], $targetFilePath);

            // Perbarui data ke database dengan dokumen baru
            $queryUpdate = "UPDATE pengumuman SET judul_pengumuman='$judul', tgl_post='$tanggal_post', dokumen='$targetFilePath' WHERE id_pengumuman=$id";
            $resultUpdate = mysqli_query($kon, $queryUpdate);

            if ($resultUpdate) {
                // Redirect kembali ke halaman pengumuman.php
                header("Location: pengumuman.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($kon);
            }
        } else {
            echo "Hanya file dengan ekstensi .doc, .docx, atau .pdf yang diizinkan.";
        }
    } else {
        // Jika tidak ada dokumen baru, perbarui data kecuali dokumen
        $queryUpdate = "UPDATE pengumuman SET judul_pengumuman='$judul', tgl_post='$tanggal_post' WHERE id_pengumuman=$id";
        $resultUpdate = mysqli_query($kon, $queryUpdate);

        if ($resultUpdate) {
            // Redirect kembali ke halaman pengumuman.php
            header("Location: pengumuman.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($kon);
        }
    }
}
?>
