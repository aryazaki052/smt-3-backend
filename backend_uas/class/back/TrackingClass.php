<?php

include ('DBClass.php');
// class Tracking extends database {
//     public $con;

//     public function __construct()
//     {
//       parent::__construct();
//     }

//     public function uploadTracking($postData, $fileData)
//     {
//         // Ambil data dari $postData
//         $nama = mysqli_real_escape_string($this->con, $postData['nama']);
//         $overview = mysqli_real_escape_string($this->con, $postData['overview']);
//         $act_highlight = mysqli_real_escape_string($this->con, $postData['act_highlight']);
//         $include = mysqli_real_escape_string($this->con, $postData['include']);
//         $harga = mysqli_real_escape_string($this->con, $postData['harga']);

//         // Proses upload gambar
//         $targetDir = "../../backview/assets/uploads/tracking/";
//         $gambarPath = $this->uploadGambar($fileData['gambar_gunung'], $targetDir);

//         // Lakukan pengecekan, misalnya jika uploadGambar mengembalikan null, hentikan proses
//         if ($gambarPath === null) {
//             echo "Upload gambar gagal.";
//             return;
//         }

//         // Query untuk menyimpan data ke database
//         $query = "INSERT INTO tracking (nama_gunung, overview, act_highlight, include, price, gambar_gunung) 
//                   VALUES ('$nama', '$overview', '$act_highlight', '$include', '$harga', '$gambarPath')";

//         // Eksekusi query
//         $result = mysqli_query($this->con, $query);

//         if ($result) {
//             echo "Data tracking berhasil diupload.";
//         } else {
//             echo "Gagal mengupload data tracking: " . mysqli_error($this->con);
//         }
//     }

//     private function uploadGambar($file, $targetDir)
//     {
//         $targetFile = $targetDir . basename($file["name"]);
//         $uploadOk = 1;
//         $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//         // Cek apakah file gambar atau bukan
//         if (getimagesize($file["tmp_name"]) === false) {
//             echo "File bukan gambar.";
//             $uploadOk = 0;
//         }

//         // Cek apakah file sudah ada
//         if (file_exists($targetFile)) {
//             echo "File sudah ada.";
//             $uploadOk = 0;
//         }

//         // Batasi ukuran file
//         if ($file["size"] > 500000) {
//             echo "Ukuran file terlalu besar.";
//             $uploadOk = 0;
//         }

//         // Hanya izinkan beberapa tipe file gambar tertentu
//         if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//             echo "Hanya izinkan file JPG, JPEG, PNG, dan GIF.";
//             $uploadOk = 0;
//         }

//         // Cek nilai uploadOk sebelum menyimpan file
//         if ($uploadOk == 1) {
//             if (move_uploaded_file($file["tmp_name"], $targetFile)) {
//                 return $targetFile; // Kembalikan path file gambar yang sudah diupload
//             } else {
//                 echo "Gagal menyimpan file.";
//             }
//         }

//         return null; // Kembalikan null jika proses upload gagal
//     }
// }

class Tracking extends database
{
  public $con;

    function __construct()
    {
       parent::__construct();
    }

    function uploadTracking($data)
    {
        // Ambil data dari formulir
        $nama = $data["nama"];
        $overview = $data["overview"];
        $actHighlight = $data["act_highlight"];
        $include = $data["include"];
        $harga = $data["harga"];

        // Proses upload gambar
        $targetDir = "../../backview/assets/uploads/tracking/"; // Folder untuk menyimpan gambar
        $gambarName = $_FILES["gambar_gunung"]["name"];
        $targetFilePath = $targetDir . $gambarName;

        // Pindahkan gambar ke folder uploads
        move_uploaded_file($_FILES["gambar_gunung"]["tmp_name"], $targetFilePath);

        // Masukkan data ke database
        $query = "INSERT INTO tracking (nama_gunung, overview, act_highlight, include, price, gambar_gunung) VALUES ('$nama', '$overview', '$actHighlight', '$include', '$harga', '$gambarName')";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            // Redirect kembali ke halaman tracking.php atau halaman lainnya
            header("Location: ../../backview/tracking/TrackingView.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($this->con);
        }
    }

    function updatetracking($data){
      // Ambil data dari formulir
      $nama = $data["nama"];
      $overview = $data["overview"];
      $actHighlight = $data["act_highlight"];
      $include = $data["include"];
      $harga = $data["harga"];
      $id = $_POST['id'];
  
      // Cek apakah ada gambar baru
      if (!empty($_FILES["gambar_gunung"]["name"])) {
          // Proses upload gambar
          $targetDir = "../../backview/assets/uploads/tracking/"; // Folder untuk menyimpan gambar
          $gambarName = basename($_FILES["gambar_gunung"]["name"]);
          $targetFilePath = $targetDir . $gambarName;
          $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  
          // Cek apakah file adalah gambar yang diizinkan
          $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
          if (in_array($fileType, $allowedTypes)) {
              // Hapus gambar lama dari direktori unggah
              $queryGetData = "SELECT gambar_gunung FROM tracking WHERE id = $id";
              $resultGetData = mysqli_query($this->con, $queryGetData);
  
              if ($resultGetData) {
                  $data = mysqli_fetch_assoc($resultGetData);
                  if (!empty($data['gambar_gunung'])) {
                      unlink($data['gambar_gunung']);
                  }
              }
  
              // Pindahkan file ke folder unggah
              move_uploaded_file($_FILES["gambar_gunung"]["tmp_name"], $targetFilePath);
  
              // Perbarui data ke database dengan gambar baru
              $queryUpdate = "UPDATE tracking SET nama_gunung='$nama', overview='$overview', act_highlight='$actHighlight', include='$include', price='$harga', gambar_gunung='$gambarName' WHERE id=$id";

              $resultUpdate = mysqli_query($this->con, $queryUpdate);
  
              if ($resultUpdate) {
                  // Redirect kembali ke halaman TrackingView.php
                  header("Location: ../../backview/tracking/TrackingView.php");
                  exit();
              } else {
                  echo "Error updating record: " . mysqli_error($this->con);
              }
          } else {
              echo "Hanya file dengan ekstensi .jpg, .jpeg, .png, atau .gif yang diizinkan.";
          }
      } else {
          // Jika tidak ada gambar baru, perbarui data kecuali gambar
          $queryUpdate = "UPDATE tracking SET nama_gunung='$nama', overview='$overview', act_highlight='$actHighlight', include='$include', price='$harga' WHERE id=$id";
          $resultUpdate = mysqli_query($this->con, $queryUpdate);
  
          if ($resultUpdate) {
              // Redirect kembali ke halaman TrackingView.php
              header("Location: ../../backview/tracking/TrackingView.php");
              exit();
          } else {
              echo "Error updating record: " . mysqli_error($this->con);
          }
      }
  }
  

  public function deleteTracking($id_tracking)
  {
      // Pastikan ID Tracking valid
      if (!empty($id_tracking)) {
          // Ambil nama file gambar berdasarkan ID yang akan dihapus
          $query_file = "SELECT gambar_gunung FROM tracking WHERE id = '$id_tracking'";
          $result_file = mysqli_query($this->con, $query_file);

          if ($result_file) {
              $row_file = mysqli_fetch_assoc($result_file);
              $nama_file = $row_file['gambar_gunung'];

              // Hapus gambar terkait di folder unggah
              $path_to_file = '../../backview/assets/uploads/tracking/' . $nama_file;
              if (unlink($path_to_file)) {
                  // Gambar dihapus dari folder unggah
                  $query_delete = "DELETE FROM tracking WHERE id = '$id_tracking'";
                  $result_delete = mysqli_query($this->con, $query_delete);

                  if ($result_delete) {
                      // Data tracking berhasil dihapus dari database
                      header("Location: ../../backview/tracking/TrackingView.php");
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
}
?>
