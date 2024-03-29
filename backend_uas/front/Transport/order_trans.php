<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transport Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../navbar/navbar.css">
    <!-- <link rel="stylesheet" href="tracking.css"> -->
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="order.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- keterangan -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- overview -->
    <!-- google font desk p -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">

    <!-- book wa -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=El+Messiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=El+Messiri&family=Lemonada&display=swap" rel="stylesheet">

    <!-- Footer -->
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Ysabeau+Infant:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Inter&family=Ysabeau+Infant:wght@700&display=swap" rel="stylesheet">


    <?php
    include('../../class/back/TransportClass.php');
    include('../../class/function.php');
    sessionpesan();

    $transport = new transport(); //ubah ke tour class

    // Ambil ID dari parameter URL
    $id_trans = isset($_GET['id']) ? $_GET['id'] : null;
    $transportDetail = $transport->gettransportDetail($id_trans); //ubah ke gettourdetail

    ?>

    <style>
        .guide-card {
            width: 18rem;
            position: relative;
            overflow: hidden;
        }

        .guide-card .img-hover-zoom img {
            transition: transform 0.5s;
        }

        .guide-card:hover .img-hover-zoom img {
            transform: scale(1.1);
        }

        .guide-card .card-body {
            padding: 10px;
        }

        .guide-card .select-btn {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .guide-card .select-btn.selected {
            background-color: #e74c3c;
        }

        .select-btn {
            cursor: pointer;
        }

        .select-btn.selected {
            background-color: #e74c3c;
            /* Ganti dengan warna yang diinginkan */
            color: #fff;
        }
    </style>
</head>


<body>

    <!--navbar  -->
    <nav class="navbar container-fluid navbar-expand-md navbar-light " style="position: fixed;">
        <div class="container-fluid">
            <!-- Logo navbar -->
            <a class="navbar-brand logo" href="../index.html"><img src="../gambar/logonew.png" alt="logo" width="105px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-lg collapse navbar-collapse justify-content-end navbara" id="navbarNavDropdown">
                <ul class="navbar-nav navbarb">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../tracking/trackings.php">Bali Tracking</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../Transport/transport.php">Bali Transport</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../tour/tour.php">Bali Tour</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href=""><i class="fa-regular fa-user"></i></a>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>


    <div style="margin-top: 100px;">
        <h1 class="text-center fw-bold mb-5" style="color: rgb(0, 0, 0);"><?= $transportDetail['nama_mobil'] ?> </h1>
        <div class="row">

            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card shadow">
                        <div class="card-body d-flex row justify-content-center">
                            <img src="../../backview/assets/uploads/transport/<?php echo $transportDetail['gambar_mobil']; ?>" alt="ini gambar" width="90%">
                            <hr>
                            <div class="box mt-4">
                                <input type="date" name="selected_date" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <!-- customer detail -->
                        <div class="container">
                            <h2 class="text-center">Customer Detail</h2>
                            <hr>
                            <form action="orderact.php" method="post">
                                <input type="number" value="<?php echo $id_trans; ?>" name="id_trans" hidden>
                                <!-- nanti diatas ubah ke id transport -->

                                <?php
                                // Ambil data tanggal dari form sebelumnya
                                $selectedDate = isset($_POST['selected_date']) ? $_POST['selected_date'] : '';
                                ?>
                                <input type="hidden" name="selected_date" value="<?= $selectedDate ?>">

                                <div class="row rounded-corners">
                                    <div class="col">
                                        <label class="details">Nama Depan :</label>
                                        <input type="text" class="form-control" name="nama_depan" placeholder="Masukan Nama depan" required>
                                    </div>
                                    <div class="col">
                                        <label class="details">Nama Belakang :</label>
                                        <input type="text" class="form-control" name="nama_belakang" placeholder="Masukan Nama Belakang" required>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label class="details">No. Hp :</label>
                                        <input type="number" class="form-control" name="no_hp" placeholder="Masukan No Hp" required>
                                    </div>
                                    <div class="col">
                                        <label class="details">Email :</label>
                                        <input type="email" class="form-control" name="email" placeholder="Masukan Email" required>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div>
            </div>


            <!-- Tombol Simpan -->
            <div class="mt-3 d-flex justify-content-center">
                <button type="submit btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>



    <!-- jarak -->
    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>

    <!-- footer -->
    <div class="container-fluid footer">
        <div class="footer-isi">
            <div class="alamat">
                <h3>Gunung Batur Guide</h3>
                <p>Jalan Sukaluwih, Banjar Gentong, Tegalalang, Gianyar, <br>
                    Bali, 80561, Indonesia.</p>
                <p>Telepon: +6282 3593 65098</p>
                <p>Email: info@balitrekkingtour.com</p>
            </div>
            <div class="company">
                <h3>Bali Trekking Tour Company
                </h3>
                <img src="../gambar/logonew.png" alt="">
                <p>Welcome to Bali Trekking Tour : Journey to the spirit of Bali, The explorations of the spirit mountains,
                    unique Bali cultures and its traditions.</p>
                <p>Bali Trekking Tour provide services as Bali Trekking Tours, Bali full Day Tours, Bali Adventure Tours and
                    Bali Overnight Tours! Let's choose & book your tour with us!</p>
            </div>
            <div class="medsos">
                <h3>Our Media Social</h3>
                <div class="medsos1">
                    <div class="medsos2">
                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>&nbsp; &nbsp; @balitrackingtour</a>
                    </div>
                    <div class="medsos2">
                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                            </svg>&nbsp; &nbsp;@balitrackingtour</a>
                    </div>
                    <div class="medsos2">
                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>&nbsp; &nbsp;@balitrackingtour</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="copyright">
                <p>Copyright © 2023 by BALI TREKKING TOUR</p>
            </div>
        </div>
    </div>




    <!-- script link -->
    <div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

        <script src="../navbar/navbar.js"></script>
        <script src="order.js"></script>
        <script src="https://kit.fontawesome.com/5b90b4fa74.js" crossorigin="anonymous"></script>
    </div>

    <script>
        function selectGuide(button) {
            // Hapus kelas 'selected' dari semua tombol guide
            var allGuideButtons = document.querySelectorAll('.select-btn');
            allGuideButtons.forEach(function(btn) {
                btn.classList.remove('selected');
            });

            // Tambahkan kelas 'selected' pada tombol yang dipilih
            button.classList.add('selected');

            // Ambil input radio terkait dan tandai sebagai terpilih
            var radioId = button.getAttribute('for');
            var radioInput = document.getElementById(radioId);
            radioInput.checked = true;
        }
    </script>
</body>