<?php
include "../navbar/navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="../fa/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
<form action="" method="post">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <img src="../gambar/L1.webp" alt="ini gambar" width="100%">
                    <hr>
                    <div class="box mt-4">
                        <div class="calendar d-fix">
                            <div class="calendar-header">
                            <span class="month-picker" id="month-picker"> May </span>
                            <div class="year-picker" id="year-picker">
                                <span class="year-change" id="pre-year">
                                <pre><</pre>
                                </span>
                                <span id="year">2020 </span>
                                <span class="year-change" id="next-year">
                                <pre>></pre>
                                </span>
                            </div>
                            </div>
                    
                            <div class="calendar-body">
                            <div class="calendar-week-days">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="calendar-days">
                            </div>
                            </div>
                            <div class="calendar-footer">
                            </div>
                            <div class="date-time-formate">
                            <div class="day-text-formate">TODAY</div>
                            <div class="date-time-value">
                                <div class="time-formate">02:51:20</div>
                                <div class="date-formate">23 - july - 2022</div>
                            </div>
                            </div>
                            <div class="month-list"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <!-- guide -->
                    <div class="text-center">
                        <h2>Available Guide</h2>
                    </div>
                    <hr>
                    <section class="container">
                        <div class="d-flex row justify-content-center guide">
                            <!-- card1 -->
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="ratio ratio-4x3 img-hover-zoom">
                                    <img src="https://st2.depositphotos.com/3662505/5821/i/450/depositphotos_58212589-stock-photo-tourists.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Mr. Agung Juliansyah</h5>
                                    <p class="justify">
                                        As an experienced tour guide, I have been in this profession for more than ten years, My language skills include English, Spanish and French.
                                    </p>
                                </div>
                                <div class="right">
                                    <button type="submit" class="btn btn-light right-align">Book Now!</button>
                                </div>
                            </div>
                            <!-- card2 -->
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="ratio ratio-4x3 img-hover-zoom">
                                    <img src="https://panduasia.com/www/assets/blog_images/tips-lengkap-tour-guide-membangun-personal-branding-di-era-digital.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Mrs. Saputri Yanti</h5>
                                    <p class="justify">
                                        As an experienced tour guide, I have been in this profession for more than two years, my language skills include English and Korean.
                                    </p>
                                </div>
                                <div class="right">
                                    <button type="submit" class="btn btn-light right-align">Book Now!</button>
                                </div>
                            </div>
                            <!-- card3 -->
                            <div class="card mb-4" style="width: 18rem;">
                                <div class="ratio ratio-4x3 img-hover-zoom">
                                    <img src="https://qph.cf2.quoracdn.net/main-qimg-ed9942be4e62a37bf8f20e0be130eb40-lq">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center ">Mrs. Sukma Larasati</h5>
                                    <p class="justify">
                                    As an experienced tour guide, I have been in this profession for approximately 1 year, my language skills include English and French.
                                    </p>
                                </div>
                                <div class="right">
                                    <button type="submit" class="btn btn-light right-align">Book Now!</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <!-- customer detail -->
                    <div class="container">
                    <h2 class="text-center">Customer Detail</h2> <hr>
                        <div class="row rounded-corners">
                            <div class="col">
                                <label class="details">Nama Depan :</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama depan">
                            </div>
                            <div class="col">
                                <label class="details">Nama Belakang :</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Belakang">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col">
                                <label class="details">No. Hp :</label>
                                <input type="number" class="form-control" placeholder="Masukan No Hp">
                            </div>
                            <div class="col">
                                <label class="details">Email :</label>
                                <input type="email" class="form-control" placeholder="Masukan Email">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#customerDetailModal">Simpan</button>
                        </div>
                        <!-- Pop-up modal for customer detail -->
                        <div class="modal fade" id="customerDetailModal" tabindex="-1" aria-labelledby="customerDetailModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="customerDetailModalLabel">Customer Detail Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your customer detail information here -->
                                        <p>Nama Depan: <span id="modalFirstName"></span></p>
                                        <p>Nama Belakang: <span id="modalLastName"></span></p>
                                        <p>No. Hp: <span id="modalPhoneNumber"></span></p>
                                        <p>Email: <span id="modalEmail"></span></p>
                                        <p>Guide: <span id="modalGuide"></span></p>
                                        <p>Destination: <span id="modalDestination"></span></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                </div>
            </div>
           
        </div>
    </div>
</form>
<br>
<script src="js/detail.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "../footer/footer.php";
?>