<?php
include "../../koneksi.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_pengumuman = $_GET['id'];

    // Ambil nama file pengumuman berdasarkan ID yang akan dihapus
    $query_file = "SELECT dokumen FROM pengumuman WHERE id_pengumuman = '$id_pengumuman'";
    $result_file = mysqli_query($kon, $query_file);
    if ($result_file) {
        $row_file = mysqli_fetch_assoc($result_file);
        $nama_file = $row_file['dokumen'];

        // Hapus file terkait di folder unggah
        $path_to_file = 'unggah/' . $nama_file;
        if (unlink($path_to_file)) {
            // File dihapus dari folder unggah
            // Sekarang hapus entri data dari database
            $query_delete = "DELETE FROM pengumuman WHERE id_pengumuman = '$id_pengumuman'";
            $result_delete = mysqli_query($kon, $query_delete);
            if ($result_delete) {
                // Data pengumuman berhasil dihapus dari database
                echo "Data pengumuman dan file terkait berhasil dihapus!";
                header("Location: pengumuman.php");
            } else {
                echo "Gagal menghapus data pengumuman: " . mysqli_error($kon);
            }
        } else {
            echo "Gagal menghapus file dari folder unggah.";
        }
    } else {
        echo "Gagal mendapatkan data file pengumuman: " . mysqli_error($kon);
    }
} else {
    echo "ID Pengumuman tidak valid atau tidak tersedia.";
}

// Tutup koneksi database
mysqli_close($kon);
?>
