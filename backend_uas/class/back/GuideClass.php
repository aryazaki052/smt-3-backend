<?php

include ('DBClass.php');

class Guide extends database
{
  public $con;

    function __construct()
    {
       parent::__construct();
    }

    function uploadGuide($data)
    {
        // Ambil data dari formulir
        $nama = $data["nama"];
        $deskripsi = $data["deskripsi"];
        

        // Proses upload gambar
        $targetDir = "../../backview/assets/uploads/guide/"; // Folder untuk menyimpan gambar
        $gambarName = $_FILES["gambar_guide"]["name"];
        $targetFilePath = $targetDir . $gambarName;

        // Pindahkan gambar ke folder uploads
        move_uploaded_file($_FILES["gambar_guide"]["tmp_name"], $targetFilePath);

        // Masukkan data ke database
        $query = "INSERT INTO guide (nama_guide, deskripsi, gambar_guide) VALUES ('$nama', '$deskripsi', '$gambarName')";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            // Redirect kembali ke halaman tracking.php atau halaman lainnya
            header("Location: ../../backview/guide/GuideView.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($this->con);
        }
    }


  

  public function deleteGuide($id_guide)
  {
      // Pastikan ID Tracking valid
      if (!empty($id_guide)) {
          // Ambil nama file gambar berdasarkan ID yang akan dihapus
          $query_file = "SELECT gambar_guide FROM guide WHERE id_guide = '$id_guide'";
          $result_file = mysqli_query($this->con, $query_file);

          if ($result_file) {
              $row_file = mysqli_fetch_assoc($result_file);
              $nama_file = $row_file['gambar_guide'];

              // Hapus gambar terkait di folder unggah
              $path_to_file = '../../backview/assets/uploads/guide/' . $nama_file;
              if (unlink($path_to_file)) {
                  // Gambar dihapus dari folder unggah
                  $query_delete = "DELETE FROM guide WHERE id_guide = '$id_guide'";
                  $result_delete = mysqli_query($this->con, $query_delete);

                  if ($result_delete) {
                      // Data tracking berhasil dihapus dari database
                      header("Location: ../../backview/guide/GuideView.php");
                      exit();
                  } else {
                      return "Gagal menghapus data tracking: " . mysqli_error($this->con);
                  }
              } else {
                  return "Gagal menghapus gambar dari folder unggah.";
              }
          } else {
              return "Gagal mendapatkan data gambar tracking: " . mysqli_error($this->con);
          }
      } else {
          return "ID Tracking tidak valid atau tidak tersedia.";
      }
  }

//   public function getTrackingDetail($id)
//   {
//       // Query untuk mendapatkan detail tracking berdasarkan ID
//       $query = "SELECT * FROM tracking WHERE id = '$id'";
//       $result = mysqli_query($this->con, $query);
      
//       // Cek apakah query berhasil dijalankan
//       if ($result) {
//           $data = mysqli_fetch_assoc($result);
//           return $data; // Mengembalikan data tracking
//       } else {
//           return null; // Mengembalikan null jika terjadi kesalahan
//       }
//   }

}
?>
