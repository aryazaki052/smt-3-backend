<?php
// uploadscript.php

include '../../class/back/TrackingClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$tracking = new Tracking();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id_tracking = $_GET['id'];
  $tracking->deleteTracking($id_tracking);
}

?>