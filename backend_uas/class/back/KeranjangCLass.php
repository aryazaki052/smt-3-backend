<?php

include('DBClass.php');

class Keranjang extends database
{
  public $con;

  function __construct()
  {
    parent::__construct();
  }

  public function uploadKeranjang($idTracking, $namaDepan, $namaBelakang, $noHp, $email, $tanggalPesan, $idGuide)
  {
    // Masukkan data ke dalam database
    $query = "INSERT INTO keranjang_tracking (id_tracking, nama_depan, nama_belakang, no_hp, email, tanggal_pesan, id_guide) VALUES ('$idTracking', '$namaDepan', '$namaBelakang', '$noHp', '$email', '$tanggalPesan', '$idGuide')";
    $result = mysqli_query($this->con, $query);

    return $result;
  }



  function updateJadwal($data)
  {
    // Ambil data dari formulir
    $nama = $data["nama"];
    $kategori = $data["kategori"];
    $tanggal = $data["tanggal"];
    $id = $_POST['id'];


      // Jika tidak ada gambar baru, perbarui data kecuali gambar
      $queryUpdate = "UPDATE jadwal_guide SET id_guide='$nama', id_kategori='$kategori', tangal='$tanggal' WHERE id_jadwal=$id";
      $resultUpdate = mysqli_query($this->con, $queryUpdate);

      if ($resultUpdate) {
        // Redirect kembali ke halaman TrackingView.php
        header("Location: ../../backview/guidetersedia/TersediaView.php");
        exit();
      } else {
        echo "Error updating record: " . mysqli_error($this->con);
      }
    }
    
    
    public function deleteJadwal($data)
    {
        // Pastikan ID Guide valid
        if (!empty($data)) {
            // Hapus data dari tabel guide berdasarkan ID
            $query_delete = "DELETE FROM jadwal_guide WHERE id_jadwal = '$data'";
            $result_delete = mysqli_query($this->con, $query_delete);
    
            if ($result_delete) {
                // Data guide berhasil dihapus dari database
                header("Location: ../../backview/guidetersedia/TersediaView.php");
                exit();
            } else {
                return "Gagal menghapus data guide: " . mysqli_error($this->con);
            }
        } else {
            return "ID Guide tidak valid atau tidak tersedia.";
        }
    }
    
}
