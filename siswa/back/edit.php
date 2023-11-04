<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container p-3 my-3 border">
    <h1 class="text-center">Edit Data Mahasiswa Baru</h1>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../koneksi.php";
    $nim = $_GET['NIM'];
    $qry = "SELECT * FROM pendaftaran WHERE NIM = '$nim'";
    $exec = mysqli_query($kon, $qry);
    $data = mysqli_fetch_assoc($exec);
    $data1 = mysqli_fetch_array($exec);
    ?>

    
        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" placeholder="Masukan Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" value="<?= $data['nik'] ?>" class="form-control" placeholder="Masukan Nomor NIK" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" class="form-control" placeholder="Masukan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk" value="<?= $data['jk'] ?>">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan" value="<?= $data['kewarganegaraan'] ?>">
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama" value="<?= $data['agama'] ?>">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" value="<?= $data['nama_ibu'] ?>" class="form-control" placeholder="Masukan Nama Ibu Kandung" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" placeholder="Masukan Email" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" value="<?= $data['no_telp'] ?>" class="form-control" placeholder="Masukan No Telp" required>
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"><?= $data['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" value="<?= $data['kode_pos'] ?>" class="form-control" placeholder="Kode Pos" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi" required value="<?= $data['provinsi'] ?>">
                            <?php
                            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
                            $sql="select * from provinsi";
                            $hasil=mysqli_query($kon,$sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
                            <?php 
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten" required>
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan" required>
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
            <script>
            $("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "provinsi=" + id_provinsi,
                    success: function(data) {
                        $("#kabupaten").html(data);
                    }
                });
            });

            $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ambil-data.php",
                    data: "kabupaten=" + id_kabupaten,
                    success: function(data) {
                        $("#kecamatan").html(data);
                    }
                });
            });
            </script>
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan" required  value="<?= $data['pendidikan'] ?>">
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required value="<?= $data['sekolah'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport"  value="<?= $data['nilai_raport'] ?>" class="form-control"
                            placeholder="Masukan Rata-rata nilai raport" required>
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:</label>
                        <select class="form-control" name="prog1"   value="<?= $data['prog1'] ?>" required>
                            <option value="S1 - Sistem Komputer">S1 - Sistem Komputer</option>
                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                            <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                            <option value="S1 - Bisnis Digital">S1 - Bisnis Digital</option>
                            <option value="D3 - Manajamen Informatika">D3 - Manajamen Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>PIlihan Kelas:</label>
                        <select class="form-control" name="kelas"  value="<?= $data['kelas'] ?>" required>
                            <option value="Reguler">Reguler</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Percepatan">Percepatan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
</div>
</body>
</html>