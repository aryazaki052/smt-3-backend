<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tiket</title>
 <link rel="stylesheet" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <div class="container">
    <h1>SELAMAT DATANG</h1>
    <h1>DI PEMESANAN TIKET</h1>
  </div>

  <div class="container inputan">
    <form action="proses.php" method="POST" >
      <p>Masukan Nama Group: <input class="input1" type="text" name="namagrup"></p>
      <p>Jumlah Wisatawan: <input class="input1" type="number" name="jumlahorg"></p>

      <div>
        <p style="margin: 0; padding:0px;">Jenis Paket: 
          <div style="padding: 0px;">
            <select name="pilihan">
            <option value="umum">Umum</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option>
            </select>
          </div>
        </p>
      </div>
      <p style="margin-bottom:0;">Jenis Tiket:</p>
      <div class="jenis_tiket">
      <input type="radio" id="reguler" name="jenis_tiket" value="Reguler">
      <label style="margin-right: 20px;" for="reguler">Reguler</label>
      <input type="radio" id="pulangpergi" name="jenis_tiket" value="Pulang Pergi">
      <label for="pulangpergi">Pulang Pergi</label>
    </div>
      
      <div style="margin-top: 20px;">
      <button type="submit" class="btn btn-lg btn-primary">SIMPAN</button>
      </div>
    </form>
  </div>

<h1>tes</h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
