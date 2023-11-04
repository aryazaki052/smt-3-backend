<!-- <?php
$con = mysqli_connect("localhost", "root", "", "pertemuan7")
?> -->

<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="pertemuan7";

    $kon = mysqli_connect($host,$user,$password,$db);
        if (!$kon){
            die("Koneksi gagal:".mysqli_connect_error());
        }

?>