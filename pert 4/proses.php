<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>



<?php
$namagrup = $_POST['namagrup'];
$jumlahorg = $_POST['jumlahorg'];
$jenisPaket = $_POST['pilihan'];
$jenistiket = $_POST['jenis_tiket'];
?>

<?php
$harga_paket = 0;

if ($jenisPaket === "umum") {
    $harga_paket = 300000;
} elseif ($jenisPaket === "VIP") {
    $harga_paket = 500000;
} elseif ($jenisPaket === "VVIP") {
    $harga_paket = 800000;
}

$harga_tiket = 0;

if ($jenistiket === "Reguler") {
    $harga_tiket = 900000;
} elseif ($jenistiket === "Pulang Pergi") {
    $harga_tiket = 1500000;
}

$total_paket = $harga_paket * $jumlahorg;
$total_tiket = $harga_tiket * $jumlahorg;
$total_harga = $total_tiket + $total_paket;
?>
<div class="container">    
    <p>Nama Group: <?= $namagrup ?></p>
    <p>Jumlah Wisatawan: <?= $jumlahorg ?></p>
    <p>Jenis Paket: <?= ucfirst($jenisPaket) ?></p>
    <p>Harga Paket: Rp. <?= number_format($harga_paket, 0, ',', '.') ?></p>
    <p>Jenis Tiket: <?= ucfirst($jenistiket) ?></p>
    <p>Harga Tiket: Rp. <?= number_format($harga_tiket, 0, ',', '.') ?></p>
    <br>
    <h3>Biaya Paket: Rp. <?= number_format($total_paket, 0, ',', '.') ?></h3>
    <h3>Biaya Tiket : Rp. <?= number_format($total_tiket, 0, ',', '.') ?></h3>
    <h3>Total Harga : Rp. <?= number_format($total_harga, 0, ',', '.') ?></h3>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
