<?php
// $kendaraan=[
//   'mobil',
//   'motor',
//   'sepeda',
//   'kapal',
//   'pesawat',
// ];

// for ($i = 0; $i <count($kendaraan); $i++) {
//   echo $kendaraan[$i] . "<br>";
// }

// $nim = [
//  [ 'nim'=> 220010001,
//   'nama'=> "hoki bangsawan",
//   'alamat' => "sibang",
//   'email' => "hoki@gmail.com"
// ],
//  [ 'nim'=> 220010001,
//   'nama'=> "zaki",
//   'alamat' => "sibang",
//   'email' => "hoki@gmail.com"
// ],
//  [ 'nim'=> 220010001,
//   'nama'=> "adit",
//   'alamat' => "sibang",
//   'email' => "hoki@gmail.com"
// ],
//  [ 'nim'=> 220010001,
//   'nama'=> "rinus",
//   'alamat' => "sibang",
//   'email' => "hoki@gmail.com"
// ],
//  [ 'nim'=> 220010001,
//   'nama'=> "bryan",
//   'alamat' => "sibang",
//   'email' => "hoki@gmail.com"
// ]
// ];

// for ($i = 0; $i < count($nim); $i++) {
//   echo "NIM: " . $nim[$i]['nim'] . "<br>"; 
//   echo "Nama: " . $nim[$i]['nama'] . "<br>";
//   echo "Alamat: " . $nim[$i]['alamat'] . "<br>";
//   echo "Email: " . $nim[$i]['email'] . "<br><br>";
//   echo "<hr>";
// }

// foreach($nim as $data){
//   echo $data['nim'] ."<br>";
//   echo $data['nama'] ."<br>";
//   echo $data['alamat'] ."<br>";
//   echo $data['email'] ."<br>";
// }



$con = mysqli_connect('localhost', 'root', '','siswa');
$query = "SELECT foto_profil, nama, alamat, no_telp, email FROM pendaftaran";
$result = mysqli_query($con, $query);

$data=[];

while ($row = mysqli_fetch_assoc($result)) {
  $data[] = array(
      'foto_profil' => $row['foto_profil'],
      'nama' => $row['nama'],
      'alamat' => $row['alamat'],
      'no_telp' => $row['no_telp'],
      'email' => $row['email']
  );
}


// echo "<pre";
// print_r($data);
// echo "<pre";



// foreach ($data as $mhs){
//   echo $mhs['nama'] ."<br>";
//   echo $mhs['no_telp'] ."<br>";
//   echo $mhs['email'] ."<br>" . "<hr>";
// }


// $buah = [
//   [
//   'nama_buah' => "apel",
//   'warna_buah' => "hijau",
//   'asal' => "malang"
//   ],
//   [
//   'nama_buah' => "apel",
//   'warna_buah' => "hijau",
//   'asal' => "malang"
// ]
// ];

$objson = json_encode($data);
file_put_contents("data.json", $objson)
?>