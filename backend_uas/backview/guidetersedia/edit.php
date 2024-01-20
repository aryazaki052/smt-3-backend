<?php
// uploadscript.php

include '../../class/back/TersediaClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$tersedia = new Tersedia();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tersedia->updateJadwal($_POST);
}
?>