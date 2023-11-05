<?php
include "../koneksi.php";

if (isset($_GET['NIM']) && !empty($_GET['NIM'])) {
    $nim = $_GET['NIM'];

    // Query untuk menghapus data
    $qry = "DELETE FROM pendaftaran WHERE NIM = '$nim'";

    // Eksekusi query
    $result = mysqli_query($kon, $qry);

    if ($result) {
        // Jika query berhasil dieksekusi
        echo "Data berhasil dihapus!";
        header("Location: admin.php"); // Arahkan kembali ke halaman admin.php setelah proses selesai
    } else {
        // Jika terjadi kesalahan
        echo "Gagal menghapus data: " . mysqli_error($kon);
    }
} else {
    echo "NIM tidak valid atau tidak tersedia.";
}

// Tutup koneksi database
mysqli_close($kon);
?>
