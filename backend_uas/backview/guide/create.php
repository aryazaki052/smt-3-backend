<?php
// uploadscript.php

include '../../class/back/GuideClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$guide = new Guide();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guide->uploadguide($_POST);
}
?>