<?php
// uploadscript.php

include '../../class/back/TrackingClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$tracking = new Tracking();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tracking->updatetracking($_POST);
}
?>