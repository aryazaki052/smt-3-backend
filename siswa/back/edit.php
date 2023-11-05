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
    $edit = mysqli_fetch_assoc($exec);
    ?>

    
        <form id="form" method="post" action="update.php">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NIM:</label>
                        <input type="number" name="nim" value="<?= $edit['NIM'] ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" value="<?= $edit['nama'] ?>" class="form-control" placeholder="Masukan Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" value="<?= $edit['nik'] ?>" class="form-control" placeholder="Masukan Nomor NIK" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" value="<?= $edit['tempat_lahir'] ?>" class="form-control" placeholder="Masukan Tempat Lahir" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" value="<?= $edit['tanggal_lahir'] ?>" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                          <option value="1" <?php if ($edit['jk'] == 1) echo 'selected'; ?>>Laki-laki</option>
                          <option value="2" <?php if ($edit['jk'] == 2) echo 'selected'; ?>>Perempuan</option>
                      </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option value="WNI" <?php if ($edit['kewarganegaraan'] == 'WNI') echo 'selected'; ?>>Warga Negara Indonesia</option>
                            <option value="WNA" <?php if ($edit['kewarganegaraan'] == 'WNA') echo 'selected'; ?>>Warga Negara Asing</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option value="Islam" <?php if ($edit['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                            <option value="Kristen" <?php if ($edit['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                            <option value="Katolik" <?php if ($edit['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                            <option value="Hindu" <?php if ($edit['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                            <option value="Budha" <?php if ($edit['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                            <option value="Lainnya" <?php if ($edit['agama'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" value="<?= $edit['nama_ibu'] ?>" class="form-control" placeholder="Masukan Nama Ibu Kandung" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" value="<?= $edit['email'] ?>" class="form-control" placeholder="Masukan Email" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" value="<?= $edit['no_telp'] ?>" class="form-control" placeholder="Masukan No Telp" required>
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
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"><?= $edit['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" value="<?= $edit['kode_pos'] ?>" class="form-control" placeholder="Kode Pos" required>
                    </div>
                </div>
            </div>


            <div class="row">
              <div class="col-sm-4">
                  <div class="form-group">
                      <label>Provinsi:</label>
                      <select class="form-control" name="provinsi" id="provinsi" required>
                          <?php
                          include "koneksi.php";
                          // Perintah sql untuk menampilkan semua data pada tabel provinsi
                          $sql="select * from provinsi";
                          $hasil=mysqli_query($kon,$sql);
                          while ($data = mysqli_fetch_array($hasil)) {
                              $selected = ($edit['provinsi'] == $data['id_prov']) ? 'selected' : '';
                              ?>
                              <option value="<?php echo $data['id_prov'];?>" <?php echo $selected; ?>><?php echo $data['nama'];?></option>
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
                          <?php
                          $id_provinsi = $edit['provinsi']; // Dapatkan ID Provinsi yang diinputkan sebelumnya
                          $sql_kabupaten = "SELECT * FROM kabupaten WHERE id_prov = $id_provinsi";
                          $hasil_kabupaten = mysqli_query($kon, $sql_kabupaten);
                          while ($data_kabupaten = mysqli_fetch_array($hasil_kabupaten)) {
                              $selected_kabupaten = ($edit['kabupaten'] == $data_kabupaten['id_kab']) ? 'selected' : '';
                              ?>
                              <option value="<?php echo $data_kabupaten['id_kab'];?>" <?php echo $selected_kabupaten; ?>><?php echo $data_kabupaten['nama'];?></option>
                              <?php
                          }
                          ?>
                      </select>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                      <label>Kecamatan:</label>
                      <select class="form-control" name="kecamatan" id="kecamatan" required>
                          <?php
                          $id_kabupaten = $edit['kabupaten']; // Dapatkan ID Kabupaten yang diinputkan sebelumnya
                          $sql_kecamatan = "SELECT * FROM kecamatan WHERE id_kab = $id_kabupaten";
                          $hasil_kecamatan = mysqli_query($kon, $sql_kecamatan);
                          while ($data_kecamatan = mysqli_fetch_array($hasil_kecamatan)) {
                              $selected_kecamatan = ($edit['kecamatan'] == $data_kecamatan['id_kec']) ? 'selected' : '';
                              ?>
                              <option value="<?php echo $data_kecamatan['id_kec'];?>" <?php echo $selected_kecamatan; ?>><?php echo $data_kecamatan['nama'];?></option>
                              <?php
                          }
                          ?>
                      </select>
                  </div>
              </div>
          </div>


            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan">
                            <option value="SMA-IPA" <?php if ($edit['pendidikan'] == 'SMA-IPA') echo 'selected'; ?>>SMA - IPA</option>
                            <option value="SMA-IPS" <?php if ($edit['pendidikan'] == 'SMA-IPS') echo 'selected'; ?>>SMA - IPS</option>
                            <option value="SMK-IPA" <?php if ($edit['pendidikan'] == 'SMK-IPA') echo 'selected'; ?>>SMK - IPA</option>
                            <option value="SMK-IPS" <?php if ($edit['pendidikan'] == 'SMK-IPS') echo 'selected'; ?>>SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required value="<?= $edit['sekolah'] ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport"  value="<?= $edit['nilai_raport'] ?>" class="form-control"
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
                        <select class="form-control" name="prog1" required>
                            <option value="S1 - Sistem Komputer" <?php if ($edit['prog1'] === 'S1 - Sistem Komputer') echo 'selected'; ?>>S1 - Sistem Komputer</option>
                            <option value="S1 - Sistem Informasi" <?php if ($edit['prog1'] === 'S1 - Sistem Informasi') echo 'selected'; ?>>S1 - Sistem Informasi</option>
                            <option value="S1 - Teknologi Informasi" <?php if ($edit['prog1'] === 'S1 - Teknologi Informasi') echo 'selected'; ?>>S1 - Teknologi Informasi</option>
                            <option value="S1 - Bisnis Digital" <?php if ($edit['prog1'] === 'S1 - Bisnis Digital') echo 'selected'; ?>>S1 - Bisnis Digital</option>
                            <option value="D3 - Manajamen Informatika" <?php if ($edit['prog1'] === 'D3 - Manajamen Informatika') echo 'selected'; ?>>D3 - Manajamen Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>PIlihan Kelas:</label>
                        <select class="form-control" name="kelas" required>
                            <option value="Reguler" <?php if ($edit['kelas'] === 'Reguler') echo 'selected'; ?>>Reguler</option>
                            <option value="Karyawan" <?php if ($edit['kelas'] === 'Karyawan') echo 'selected'; ?>>Karyawan</option>
                            <option value="Percepatan" <?php if ($edit['kelas'] === 'Percepatan') echo 'selected'; ?>>Percepatan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                <button type="submit" form="form" class="btn btn-primary">EDIT</button>

                </div>
            </div>
        </form>
</div>
</body>
</html>