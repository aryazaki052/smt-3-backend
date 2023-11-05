<?php
// Ambil nilai dari $_POST
$nim = $_POST['nim'];
$nama = $_POST["nama"];
$nik = $_POST["nik"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jk = $_POST["jk"];
$kewarganegaraan = $_POST["kewarganegaraan"];
$agama = $_POST["agama"];
$nama_ibu = $_POST["nama_ibu"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];
$kode_pos = $_POST["kode_pos"];
$provinsi = $_POST["provinsi"];
$kabupaten = $_POST["kabupaten"];
$kecamatan = $_POST["kecamatan"];
$pendidikan = $_POST["pendidikan"];
$sekolah = $_POST["sekolah"];
$nilai_raport = $_POST["nilai_raport"];
$prog1 = $_POST["prog1"];
$kelas = $_POST["kelas"];

include "../koneksi.php";

// Query untuk update data
$qry = "UPDATE pendaftaran SET 
          nama = '$nama',
          nik = '$nik',
          tempat_lahir = '$tempat_lahir',
          tanggal_lahir = '$tanggal_lahir',
          jk = '$jk',
          kewarganegaraan = '$kewarganegaraan',
          agama = '$agama',
          nama_ibu = '$nama_ibu',
          email = '$email',
          no_telp = '$no_telp',
          alamat = '$alamat',
          kode_pos = '$kode_pos',
          provinsi = '$provinsi',
          kabupaten = '$kabupaten',
          kecamatan = '$kecamatan',
          pendidikan = '$pendidikan',
          sekolah = '$sekolah',
          nilai_raport = '$nilai_raport',
          prog1 = '$prog1',
          kelas = '$kelas'
          WHERE NIM = '$nim'";

// Eksekusi query
$result = mysqli_query($kon, $qry);

if ($result) {
  // Jika query berhasil dieksekusi
  echo "Data berhasil diperbarui!";
  header("Location: admin.php"); // Arahkan kembali ke halaman admin.php setelah proses selesai
} else {
  // Jika terjadi kesalahan
  echo "Gagal memperbarui data: " . mysqli_error($kon);
}

// Tutup koneksi database
mysqli_close($kon);
?>
