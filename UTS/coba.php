<?php
include 'back/query_database.php'; 

// Panggil fungsi yang ada di file database_functions.php
$query = "SELECT * FROM mahasiswa";
$result = runQuery($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama_mahasiswa"] . " - NIM: " . $row["NIM"] . "<br>";
    }
} else {
    echo "Tidak ada data.";
}
?>