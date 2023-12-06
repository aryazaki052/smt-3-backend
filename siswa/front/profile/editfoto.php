<?php
session_start();
include "../../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_photo"])) {
    $target_dir = "unggah/"; // Folder untuk menyimpan foto
    $targetFilePath = $target_dir . basename($_FILES["profile_photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Izinkan hanya format gambar tertentu
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Hanya file dengan ekstensi .jpg, .jpeg, .png, atau .gif yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        // Hapus foto profil lama sebelum mengunggah yang baru
        $nim = $_SESSION['NIM']; // Ambil NIM dari sesi yang sudah login
        $queryGetOldPhoto = "SELECT foto_profil FROM pendaftaran WHERE NIM = '$nim'";
        $resultGetOldPhoto = mysqli_query($kon, $queryGetOldPhoto);

        if ($resultGetOldPhoto) {
            $row = mysqli_fetch_assoc($resultGetOldPhoto);
            $oldPhoto = $row['foto_profil'];

            if ($oldPhoto != null && file_exists($target_dir . $oldPhoto)) {
                unlink($target_dir . $oldPhoto); // Hapus foto profil lama dari folder
            }
        }

        // Pindahkan file ke folder yang ditentukan
        if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $targetFilePath)) {
            // File berhasil diunggah, simpan informasi di database
            $foto_profil = basename($_FILES["profile_photo"]["name"]);

            // Update kolom 'Foto_Profil' di tabel 'pendaftaran' untuk NIM yang login
            $query = "UPDATE pendaftaran SET foto_profil = '$foto_profil' WHERE NIM = '$nim'";
            $result = mysqli_query($kon, $query);

            if ($result) {
                echo "File " . basename($_FILES["profile_photo"]["name"]) . " berhasil diunggah dan disimpan.";
                header("Location: ../index.php"); // Redirect ke halaman lain setelah unggah berhasil
                exit(); // Pastikan untuk menghentikan eksekusi skrip setelah melakukan redirect
            } else {
                echo "Maaf, terjadi kesalahan saat menyimpan informasi file di database.";
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
