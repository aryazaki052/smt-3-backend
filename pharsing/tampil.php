<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="tampil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
  $obJson = file_get_contents("data.json");
  $data = json_decode($obJson, true);


    foreach ($data as $tampil) {
      echo '<div class="container" style=" margin-bottom: 10px;">';
      echo '<div class="row">';
      echo '<div class="col-md-2 gambar" >';
      // Tampilkan gambar (foto_profil)
      echo '<img src="backend/siswa/front/profile/unggah/' . $tampil['foto_profil'] . '" alt="Foto Profil" width="100">';
      echo '</div>';
      echo '<div class="col-md-10">';
      echo '<ul class="biodata">';
      // Tampilkan informasi lainnya
      echo '<li>Nama: ' . $tampil['nama'] . '</li>';
      echo '<li>Alamat: ' . $tampil['alamat'] . '</li>';
      echo '<li>No HP: ' . $tampil['no_telp'] . '</li>';
      echo '<li>Email: ' . $tampil['email'] . '</li>';
      echo '</ul>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
  
  ?>
  ?>

<img src="backend/siswa/front/profile/unggah/" alt="">
<!-- <div class="container" style="border: 1px solid red;">
  <div class="row">
    <div class="col-md-2" style="border: 1px solid blue;">
    <img src="" alt="">
    </div>
    <div class="col-md-10">
      <ul>
        <li>nama:</li>
        <li>alamat:</li>
        <li>no hp:</li>
        <li>email:</li>

      </ul>
    </div>
  </div>
</div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



<!-- <?php
$obJson = file_get_contents("data.json");
$data = json_decode($obJson);




foreach($data as $datas){
  echo "Foto Profil: " . $datas->foto_profil . "<br>"; 
  echo "Nama: " . $datas->nama . "<br>"; 
  echo "Alamat: " . $datas->alamat . "<br>"; 
  echo "No Hp: " . $datas->no_telp . "<br>"; 
  echo "email: " . $datas->email . "<br>" . "<hr>"; 
}
?> -->
