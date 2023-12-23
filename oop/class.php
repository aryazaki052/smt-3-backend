<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
  <?php

  class unggulan{

      private $nim;
      protected $nama;
      public $alamat;

      function __construct($nama){
          $this->nama = $nama;
      }
      function getNama(){
          return $this->nama;
      }
      function setNim($nim) {
          $this->nim = $nim;
      }
      function getNim() { 
          return $this->nim;
      }

  }

  class Krs extends Unggulan {
    public $mataKuliah;
    public $kelas;

    function getKrs($smt) {
        if ($smt == 1) {
            $this->mataKuliah = "Front End Development";
            $this->kelas = "UG221";
            $krs = [
              "nama_mhs" => $this->nama,
              "mata_kuliah" => $this->mataKuliah,
              "kelas" => $this->kelas
            ];
        } else if ($smt == 2) {
            $this->mataKuliah = "Backend";
            $this->kelas = "UG212";
            $krs = [
              "nama_mhs" => $this->nama,
              "mata_kuliah" => $this->mataKuliah,
              "kelas" => $this->kelas
            ];
        } else{
          
          return;
        }
        return $krs;
    }
  }



  // $ug = new unggulan("edo");
  // $ug->setNim(220010161);
  // echo $ug->getNim();
  // echo "<br>";
  // echo $ug->getNama();

  $krs = new Krs("rinus");
  $dataKrs = $krs->getKrs(2);
  ?>
</div>
  
<div>
<div>
  <h2>Pilih Semester</h2>
  <form action="#" method="post">
      <label for="pilihan">Pilih salah satu:</label> <br>
      <select name="pilihan" id="pilihan">
        <option value="1">Pilihan 1</option>
        <option value="2">Pilihan 2</option>
        <option value="3">Pilihan 3</option>
        <option value="4">Pilihan 4</option>
      </select>
      <input type="submit" value="Kirim">
    </form>
</div>
<div>
    <?php
      // Skrip PHP untuk menampilkan hasil ketika user memilih pilihan 1 atau 2

      if(isset($_POST['pilihan'])){
        $userInput = $_POST['pilihan'];
        // Menggunakan class Krs untuk mendapatkan data KRS
        $krs = new Krs("rinus");
        $dataKrs = $krs->getKrs($userInput);

        if ($userInput == 1 || $userInput == 2) {
          echo "<p>Nama Mahasiswa: " . $dataKrs['nama_mhs'] . "</p>";
          echo "<p>Matakuliah: " . $dataKrs['mata_kuliah'] . "</p>";
          echo "<p>Kelas: " . $dataKrs['kelas'] . "</p>";
        } else {
          echo "Data tidak ada"; // Tambahan penanganan untuk pilihan 3 dan 4
        }

      }



    ?>
  </div>
</div>




</body>
</html>


