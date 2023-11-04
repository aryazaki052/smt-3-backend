<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Admin</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
include "../koneksi.php";
$qry = "SELECT * FROM pendaftaran";
$exec = mysqli_query($kon, $qry);
?>

<div class="container">
    <div>
        <h1 class="text-center">Selamat Datang Di</h1>
        <h1 class="text-center">Data Pokok Mahasiswa</h1>
    </div>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Email</th>
                    <th>No Tlp.</th>
                    <th>Program Studi</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           <?php
          while ($data = mysqli_fetch_assoc($exec)) {
              echo "<tr>";
              echo "<td>" . $data['NIM'] . "</td>";
              echo "<td>" . $data['nama'] . "</td>";
              echo "<td>" . $data['email'] . "</td>";
              echo "<td>" . $data['no_telp'] . "</td>";
              echo "<td>" . $data['prog1'] . "</td>";
              echo "<td>" . $data['kelas'] . "</td>";
              echo "<td  class='text-center'>
              <a href='edit.php?NIM=" . $data['NIM'] . "'><i class='fa fa-pencil primary' aria-hidden='true'></i></a> 
              <a href='delete.php?NIM=" . $data['NIM'] . "'><i class='fa fa-trash ml-2 text-danger' aria-hidden='true'></i></a>
            </td>";
              echo "</tr>";
          }
          ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>