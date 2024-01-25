<?php

include('DBClass.php');
// class transport extends database {
//     public $con;

//     public function __construct()
//     {
//       parent::__construct();
//     }

//     public function uploadtransport($postData, $fileData)
//     {
//         // Ambil data dari $postData
//         $nama = mysqli_real_escape_string($this->con, $postData['nama']);
//         $overview = mysqli_real_escape_string($this->con, $postData['overview']);
//         $act_highlight = mysqli_real_escape_string($this->con, $postData['act_highlight']);
//         $include = mysqli_real_escape_string($this->con, $postData['include']);
//         $harga = mysqli_real_escape_string($this->con, $postData['harga']);

//         // Proses upload gambar
//         $targetDir = "../../backview/assets/uploads/transport/";
//         $gambarPath = $this->uploadGambar($fileData['gambar_mobil'], $targetDir);

//         // Lakukan pengecekan, misalnya jika uploadGambar mengembalikan null, hentikan proses
//         if ($gambarPath === null) {
//             echo "Upload gambar gagal.";
//             return;
//         }

//         // Query untuk menyimpan data ke database
//         $query = "INSERT INTO transport (nama_gunung, overview, act_highlight, include, price, gambar_mobil) 
//                   VALUES ('$nama', '$overview', '$act_highlight', '$include', '$harga', '$gambarPath')";

//         // Eksekusi query
//         $result = mysqli_query($this->con, $query);

//         if ($result) {
//             echo "Data transport berhasil diupload.";
//         } else {
//             echo "Gagal mengupload data transport: " . mysqli_error($this->con);
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

class Transport extends database
{
    public $con;

    function __construct()
    {
        parent::__construct();
    }

    function uploadTransport($data)
    {
        // Ambil data dari formulir
        $nama_mobil = $data["nama_mobil"];
        $highlight = $data["highlight"];
        $price = $data["price"];
        $price_2 = $data["price_2"];
        $price_3 = $data["price_3"];

        // Proses upload gambar
        $targetDir = "../../backview/assets/uploads/transport/"; // Folder untuk menyimpan gambar
        $gambarName = $_FILES["gambar_mobil"]["name"];
        $targetFilePath = $targetDir . $gambarName;

        // Pindahkan gambar ke folder uploads
        move_uploaded_file($_FILES["gambar_mobil"]["tmp_name"], $targetFilePath);

        // Masukkan data ke database
        $query = "INSERT INTO transport (nama_mobil, highlight, price , price_2, price_3 , gambar_mobil) VALUES ('$nama_mobil', '$highlight', '$price', '$price_2', '$price_3', '$gambarName')";
        $result = mysqli_query($this->con, $query);

        if ($result) {
            // Redirect kembali ke halaman transport.php atau halaman lainnya
            header("Location: ../../backview/transport/TransportView.php");
            exit(); // Penting untuk menghentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($this->con);
        }
    }

    function updatetransport($data)
    {
        // Ambil data dari formulir
        $nama_mobil = mysqli_real_escape_string($this->con, $data["nama_mobil"]);
        $highlight = mysqli_real_escape_string($this->con, $data["highlight"]);
        $price = mysqli_real_escape_string($this->con, $data["price"]);
        $price_2 = mysqli_real_escape_string($this->con, $data["price_2"]);
        $price_3 = mysqli_real_escape_string($this->con, $data["price_3"]);
        $id_trans = $_POST['id_trans'];

        // Cek apakah ada gambar baru
        if (!empty($_FILES["gambar_mobil"]["name"])) {
            // Proses upload gambar
            $targetDir = "../../backview/assets/uploads/transport/"; // Folder untuk menyimpan gambar
            $gambarName = basename($_FILES["gambar_mobil"]["name"]);
            $targetFilePath = $targetDir . $gambarName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Cek apakah file adalah gambar yang diizinkan
            $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowedTypes)) {
                // Hapus gambar lama dari direktori unggah
                $queryGetData = "SELECT gambar_mobil FROM transport WHERE id_trans = $id_trans";
                $resultGetData = mysqli_query($this->con, $queryGetData);

                if ($resultGetData) {
                    $data = mysqli_fetch_assoc($resultGetData);
                    if (!empty($data['gambar_mobil'])) {
                        unlink($data['gambar_mobil']);
                    }
                }

                // Pindahkan file ke folder unggah
                move_uploaded_file($_FILES["gambar_mobil"]["tmp_name"], $targetFilePath);

                // Perbarui data ke database dengan gambar baru
                $queryUpdate = "UPDATE transport SET nama_mobil='$nama_mobil', highlight='$highlight', price='$price', price_2='$price_2', price_3='$price_3', gambar_mobil='$gambarName' WHERE id_trans=$id_trans";

                $resultUpdate = mysqli_query($this->con, $queryUpdate);

                if ($resultUpdate) {
                    // Redirect kembali ke halaman transportView.php
                    header("Location: ../../backview/transport/TransportView.php");
                    exit();
                } else {
                    echo "Error updating record: " . mysqli_error($this->con);
                }
            } else {
                echo "Hanya file dengan ekstensi .jpg, .jpeg, .png, atau .gif yang diizinkan.";
            }
        } else {
            // Jika tidak ada gambar baru, perbarui data kecuali gambar
            $queryUpdate = "UPDATE transport SET nama_mobil='$nama_mobil', highlight='$highlight', price='$price', price_2='$price_2', price_3='$price_3' WHERE id_trans=$id_trans";
            $resultUpdate = mysqli_query($this->con, $queryUpdate);

            if ($resultUpdate) {
                // Redirect kembali ke halaman transportView.php
                header("Location: ../../backview/transport/TransportView.php");
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($this->con);
            }
        }
    }


    public function deletetransport($id_trans)
    {
        // Pastikan ID transport valid
        if (!empty($id_trans)) {
            // Ambil nama file gambar berdasarkan ID yang akan dihapus
            $query_file = "SELECT gambar_mobil FROM transport WHERE id_trans = '$id_trans'";
            $result_file = mysqli_query($this->con, $query_file);

            if ($result_file) {
                $row_file = mysqli_fetch_assoc($result_file);
                $nama_file = $row_file['gambar_mobil'];

                // Hapus gambar terkait di folder unggah
                $path_to_file = '../../backview/assets/uploads/transport/' . $nama_file;
                if (unlink($path_to_file)) {
                    // Gambar dihapus dari folder unggah
                    $query_delete = "DELETE FROM transport WHERE id_trans = '$id_trans'";
                    $result_delete = mysqli_query($this->con, $query_delete);

                    if ($result_delete) {
                        // Data transport berhasil dihapus dari database
                        header("Location: ../../backview/transport/TransportView.php");
                        exit();
                    } else {
                        return "Gagal menghapus data transport: " . mysqli_error($this->con);
                    }
                } else {
                    return "Gagal menghapus gambar dari folder unggah.";
                }
            } else {
                return "Gagal mendapatkan data gambar transport: " . mysqli_error($this->con);
            }
        } else {
            return "ID transport tidak valid atau tidak tersedia.";
        }
    }

    public function gettransportDetail($id_trans)
    {
        // Query untuk mendapatkan detail transport berdasarkan ID
        $query = "SELECT * FROM transport WHERE id_trans = '$id_trans'";
        $result = mysqli_query($this->con, $query);

        // Cek apakah query berhasil dijalankan
        if ($result) {
            $data = mysqli_fetch_assoc($result);
            return $data; // Mengembalikan data transport
        } else {
            return null; // Mengembalikan null jika terjadi kesalahan
        }
    }
    public function getGuidesByDate($selectedDate, $categoryId)
    {
        // Lakukan query untuk mengambil daftar guide berdasarkan tanggal
        $query = "SELECT guide.*
      FROM guide
      INNER JOIN jadwal_guide ON guide.id_guide = jadwal_guide.id_guide
      WHERE jadwal_guide.tangal = '$selectedDate' AND jadwal_guide.id_kategori = $categoryId";


        $result = mysqli_query($this->con, $query);

        if ($result) {
            $guides = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $guides;
        } else {
            return null;
        }
    }
}
