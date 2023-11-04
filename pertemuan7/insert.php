<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php 
include "proses.php"
?>

<div class="container text-center">
  <h1 class="text-center">
    Selamat Datang Di
  </h1>
  <h1>
    Input Data Mahasiswa
  </h1>
</div>
<div class="container">
<form action="proses.php" method="POST">
  <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nama_mhs">
  </div>
<div>
  <div class="form-group">
    <Label>Kode Jurusan</Label>
    <input type="text" name="kode_jurusan" id="">
  </div>
</div>
<div>
  <label>Jenis Kelamin</label>
  <select name="jenis_kelamin" id="">
    <option value="laki-laki">Laki - Laki</option>
    <option value="perempuan">Perempuan</option>
  </select>
</div>
<div>
  <label for="">Alamat</label>
  <input type="text" name="alamat">
</div>
<div>
  <label for="">Nomor HP</label>
  <input type="number" name="no-hp">
</div>
<div>
  <label>Email</label>
  <input type="email" name="email">
</div>

<div class="col-sm-4">
  <button type="submit" name="Submit" id="Submit" class="btn btn-primary">submit</button>
  <button type="reset" class="btn btn-secondary">Reset</button>
</div>

</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>