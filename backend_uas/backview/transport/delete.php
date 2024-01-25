<?php
// uploadscript.php

include '../../class/back/TransportClass.php'; // Sesuaikan dengan lokasi class Tracking.php

// Gunakan class
$transport = new Transport();

// Proses upload jika ada data yang dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $id_trans = $_GET['id'];
  $transport->deleteTransport($id_trans);
}

?>