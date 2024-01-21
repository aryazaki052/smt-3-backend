<?php
// uploadscript.php

include '../../class/back/tourClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$tour = new tour();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tour->updatetour($_POST);
}
?>