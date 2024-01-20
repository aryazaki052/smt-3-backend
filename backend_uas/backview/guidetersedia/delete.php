<?php
// uploadscript.php

include '../../class/back/TersediaClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$jadwal = new Tersedia();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id_guide = $_GET['id'];
  $jadwal->deleteJadwal($id_guide);
}

?>