<?php

include('DBClass.php');

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
        $tranmisi = $data["transmisi"];
        $kategori = $data["kategori"];
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
        $query = "INSERT INTO transport (nama_mobil, id_kategori, highlight, price , price_2, price_3 , gambar_mobil, Transmisi) VALUES ('$nama_mobil', '$kategori', '$highlight', '$price', '$price_2', '$price_3', '$gambarName', '$tranmisi')";
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
