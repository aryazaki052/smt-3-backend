<?php

include ('DBClass.php');
// class tour extends database {
//     public $con;

//     public function __construct()
//     {
//       parent::__construct();
//     }

//     public function uploadtour($postData, $fileData)
//     {
//         // Ambil data dari $postData
//         $nama = mysqli_real_escape_string($this->con, $postData['nama']);
//         $highlight = mysqli_real_escape_string($this->con, $postData['highlight']);
//         $things = mysqli_real_escape_string($this->con, $postData['things']);
//         $include = mysqli_real_escape_string($this->con, $postData['include']);
//         $harga = mysqli_real_escape_string($this->con, $postData['harga']);

//         // Proses upload gambar
//         $targetDir = "../../backview/assets/uploads/tour/";
//         $gambarPath = $this->uploadGambar($fileData['gambar_gunung'], $targetDir);

//         // Lakukan pengecekan, misalnya jika uploadGambar mengembalikan null, hentikan proses
//         if ($gambarPath === null) {
//             echo "Upload gambar gagal.";
//             return;
//         }

//         // Query untuk menyimpan data ke database
//         $query = "INSERT INTO tour (nama_gunung, highlight, things, include, inclusions, gambar_gunung) 
//                   VALUES ('$nama', '$highlight', '$things', '$include', '$harga', '$gambarPath')";

//         // Eksekusi query
//         $result = mysqli_query($this->con, $query);

//         if ($result) {
//             echo "Data tour berhasil diupload.";
//         } else {
//             echo "Gagal mengupload data tour: " . mysqli_error($this->con);
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

class tour extends database
{
  public $con;

    function __construct()
    {
       parent::__construct();
    }

    function uploadtour($data)
    {
        // Ambil data dari formulir
        $nama = $data["nama"];
        $highlight = $data["highlight"];
        $things = $data["things"];
        $itinerary = $data["itinerary"];
        $inclusions = $data["inclusions"];
        $exclusions = $data["exclusions"];
        $brings = $data["brings"];
        $price = $data["price"];

        // Proses upload gambar
        $targetDir = "../../backview/assets/uploads/tour/"; // Folder untuk menyimpan gambar
        $gambarName = $_FILES["gambar_gunung"]["name"];
        $targetFilePath = $targetDir . $gambarName;

        // Pindahkan gambar ke folder uploads
        move_uploaded_file($_FILES["gambar_gunung"]["tmp_name"], $targetFilePath);

        // Masukkan data ke database
        $query = "INSERT INTO tour (nama_gunung, highlight, things, itinerary, inclusions, exclusions, brings, gambar_gunung, price) VALUES ('$nama', '$highlight', '$things', '$itinerary', '$inclusions', '$exclusions', '$brings', '$gambarName', '$price')";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            // Redirect kembali ke halaman tour.php atau halaman lainnya
            header("Location: ../../backview/tour/TourView.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($this->con);
        }
    }

    function updatetour($data){
      // Ambil data dari formulir
        $nama = mysqli_real_escape_string($this->con, $data["nama"]);
        $highlight = mysqli_real_escape_string($this->con, $data["highlight"]);
        $things = mysqli_real_escape_string($this->con, $data["things"]);
        $itinerary = mysqli_real_escape_string($this->con, $data["itinerary"]);
        $inclusions = mysqli_real_escape_string($this->con, $data["inclusions"]);
        $exclusions = mysqli_real_escape_string($this->con, $data["exclusions"]);
        $brings = mysqli_real_escape_string($this->con, $data["brings"]);
        $price = mysqli_real_escape_string($this->con, $data["price"]);
        $id_tour = $_POST['id'];
  
      // Cek apakah ada gambar baru
      if (!empty($_FILES["gambar_gunung"]["name"])) {
          // Proses upload gambar
          $targetDir = "../../backview/assets/uploads/tour/"; // Folder untuk menyimpan gambar
          $gambarName = basename($_FILES["gambar_gunung"]["name"]);
          $targetFilePath = $targetDir . $gambarName;
          $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  
          // Cek apakah file adalah gambar yang diizinkan
          $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
          if (in_array($fileType, $allowedTypes)) {
              // Hapus gambar lama dari direktori unggah
              $queryGetData = "SELECT gambar_gunung FROM tour WHERE id_tour = $id_tour";
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
              $queryUpdate = "UPDATE tour SET nama_gunung='$nama', highlight='$highlight', things='$things', itinerary='$itinerary', inclusions='$inclusions', exclusions='$exclusions', brings='$brings' gambar_gunung='$gambarName', price='$price' WHERE id_tour=$id_tour";

              $resultUpdate = mysqli_query($this->con, $queryUpdate);
  
              if ($resultUpdate) {
                  // Redirect kembali ke halaman tourView.php
                  header("Location: ../../backview/tour/TourView.php");
                  exit();
              } else {
                  echo "Error updating record: " . mysqli_error($this->con);
              }
          } else {
              echo "Hanya file dengan ekstensi .jpg, .jpeg, .png, atau .gif yang diizinkan.";
          }
      } else {
          // Jika tidak ada gambar baru, perbarui data kecuali gambar
          $queryUpdate = "UPDATE tour SET nama_gunung='$nama', highlight='$highlight', things='$things', itinerary='$itinerary', inclusions='$inclusions', exclusions='$exclusions', brings='$brings', price='$price' WHERE id_tour=$id_tour";
          $resultUpdate = mysqli_query($this->con, $queryUpdate);
  
          if ($resultUpdate) {
              // Redirect kembali ke halaman tourView.php
              header("Location: ../../backview/tour/TourView.php");
              exit();
          } else {
              echo "Error updating record: " . mysqli_error($this->con);
          }
      }
  }
  

  public function deletetour($id_tour)
  {
      // Pastikan ID tour valid
      if (!empty($id_tour)) {
          // Ambil nama file gambar berdasarkan ID yang akan dihapus
          $query_file = "SELECT gambar_gunung FROM tour WHERE id_tour = '$id_tour'";
          $result_file = mysqli_query($this->con, $query_file);

          if ($result_file) {
              $row_file = mysqli_fetch_assoc($result_file);
              $nama_file = $row_file['gambar_gunung'];

              // Hapus gambar terkait di folder unggah
              $path_to_file = '../../backview/assets/uploads/tour/' . $nama_file;
              if (unlink($path_to_file)) {
                  // Gambar dihapus dari folder unggah
                  $query_delete = "DELETE FROM tour WHERE id_tour = '$id_tour'";
                  $result_delete = mysqli_query($this->con, $query_delete);

                  if ($result_delete) {
                      // Data tour berhasil dihapus dari database
                      header("Location: ../../backview/tour/TourView.php");
                      exit();
                  } else {
                      return "Gagal menghapus data tour: " . mysqli_error($this->con);
                  }
              } else {
                  return "Gagal menghapus gambar dari folder unggah.";
              }
          } else {
              return "Gagal mendapatkan data gambar tour: " . mysqli_error($this->con);
          }
      } else {
          return "ID tour tidak valid atau tidak tersedia.";
      }
  }

  public function gettourDetail()
  {
        $id_tour= $_GET['id'];
      // Query untuk mendapatkan detail tour berdasarkan ID
      $query = "SELECT * FROM tour WHERE id_tour = '$id_tour'";
      $result = mysqli_query($this->con, $query);
      
      // Cek apakah query berhasil dijalankan
      if (!empty($result)) {
          $data = mysqli_fetch_assoc($result);
          return $data; // Mengembalikan data tour
      } else {
          return null; // Mengembalikan null jika terjadi kesalahan
      }
  }

}
?>
