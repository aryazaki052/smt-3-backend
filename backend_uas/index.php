<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="front/landingpage/landingpage.css" />
  <link rel="stylesheet" href="front/navbar/navbar.css" />
  <link rel="stylesheet" href="front/footer/footer.css" />
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- navbar -->
  <!-- google font navbar -->
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans&display=swap" rel="stylesheet" />
  <!-- google font batur guide -->
  <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet" />

  <!-- card -->
  <!-- google font best bali activity -->
  <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet" />
  <!-- google font see what you can... -->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet" />
  <!-- google font h1 card -->
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet" />
  <!-- google font p card -->
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet" />
  <!-- google font h5 card -->
  <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet" />

  <!-- reason -->
  <!-- google font reason -->
  <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant&display=swap" rel="stylesheet" />
  <!-- google font alasan2 -->
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet" />
  <!-- google font alsn1  -->
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet" />
  <!-- google font als1 -->
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&family=Frank+Ruhl+Libre&display=swap"
    rel="stylesheet" />

  <!-- Footer -->
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <nav class="navbar container-fluid navbar-expand-md navbar-light">
    <div class="container-fluid">
      <!-- Logo navbar -->
      <a class="navbar-brand logo" href="#"><img src="front/gambar/logonew.png" alt="logo" width="105px" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-lg collapse navbar-collapse justify-content-end navbara" id="navbarNavDropdown">
        <ul class="navbar-nav navbarb">
          <li class="nav-item active">
            <a class="nav-link" href="front/landingpage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/tracking/trackings.php">Bali Tracking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/Transport/transport.php">Bali Transport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/tour/tour.php">Bali Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/authcust/Logincust.php"><i class="fa-regular fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/authcust/Logoutcust.php"><i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- carousel item -->
  <div class="carousel">
    <img src="front/gambar/4.jpg" alt="Gambar 1" class="active" />
    <img src="front/gambar/2.jpg" alt="Gambar 2" />
    <img src="front/gambar/3.jpg" alt="Gambar 3" />

    <div class="carousel-item active">
      <div class="container">
        <h1 class="batur">Bali Tour</h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi
          fugiat asperiores commodi sunt neque, odit error fuga aliquid
          delectus illum enim maiores? Sint numquam cum, adipisci
          necessitatibus voluptatibus consectetur ex.
        </p>
        <a href="https://wa.me/6282359365098" class="btn btn-lg btn-primary book">Book Now</a>
      </div>
    </div>

    <div class="carousel-indicators" style="display: flex; z-index: 1">
      <span class="active" onclick="jumpToSlide(1)"></span>
      <span onclick="jumpToSlide(2)"></span>
      <span onclick="jumpToSlide(3)"></span>
    </div>
  </div>

  <!-- card -->
  <div class="container-xl kartu">
    <div class="row">
      <div class="col-12 teks1" style="display: flex; justify-content: center">
        <h2>Best Activity In Bali</h2>
      </div>
      <div class="col-12 teks2" style="display: flex; justify-content: center">
        <h5>see what can bring your spirit back, find it now!</h5>
      </div>
    </div>
    <div class="row kartu2" style="text-align: center">
      <div class="col-md kartu1 link1">
        <h1>Bali Private Tour</h1>
        <p>
          Explore various destination in Bali with private tour services.
          Determine and book package that you love
        </p>
        <a href="tour/tour.html">
          <h5>Click & Find Now</h5>
        </a>
        <img src="front/gambar/kartu1.jpg" alt="" width="100%" />
      </div>
      <div class="col-md kartu1 link2">
        <h1>Bali Transport</h1>
        <p>
          Explore Bali with our transport vehicle to acces many place in Bali.
        </p>
        <a href="Transport/transport.html">
          <h5>Let's Join Us</h5>
        </a>
        <img src="front/gambar/kartu2.jpg" alt="" width="100%" />
      </div>
      <div class="col-md kartu1 link3">
        <h1>Sunrise Tracking</h1>
        <p>
          Enjoy the beauty of the sunrise from the top of the most beautiful
          mountain in Bali.
        </p>
        <a href="tracking/tracking.html">
          <h5>Chose & Find Your Spirit</h5>
        </a>
        <!-- <h5>Chose & Find Your Spirit</h5> -->
        <img src="front/gambar/kartu3.jpg" alt="" width="100%" />
      </div>
    </div>
  </div>

  <!-- reason -->
  <div class="container-md reason">
    <div class="alasan">
      <div class="alasan1">
        <h2>Reasons People Choose Our Service</h2>
      </div>
      <div class="alasan2">
        <p>know about what our customers love about us</p>
      </div>
      <div class="kotak">
        <div class="alasan3">
          <div class="alsn1">
            <div class="ceklist">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
                <title>check-circle</title>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
              </svg>
              <h4>Experienced local guide</h4>
            </div>
            <div class="als1">
              We are young local guides who have decades of experience in
              guiding tourists while in Bali.
            </div>
          </div>
          <div class="alsn1">
            <div class="ceklist">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
                <title>check-circle</title>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
              </svg>
              <h4>Be friends and assistant</h4>
            </div>
            <div class="als1">
              We are ready to be your friend and assistant during your
              vacation and adventure.
            </div>
          </div>
          <div class="alsn1">
            <div class="ceklist">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
                <title>check-circle</title>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
              </svg>
              <h4>Know the best spots to visit</h4>
            </div>
            <div class="als1">Know the best spots to visit</div>
          </div>
          <div class="alsn1">
            <div class="ceklist">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
                <title>check-circle</title>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
              </svg>
              <h4>Your photo & video assistant</h4>
            </div>
            <div class="als1">
              We are always ready to help capture your adventures with photos
              and videos.
            </div>
          </div>
          <div class="alsn1">
            <div class="ceklist">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 40px; fill: rgb(44, 77, 1)">
                <title>check-circle</title>
                <path
                  d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
              </svg>
              <h4>Ready for you 24/7</h4>
            </div>
            <div class="als1">Ready for you 24/7</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- wa -->
  <div class="whatsapp">
    <div class="wa1">
      <a href="https://wa.me/6282359365098"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="wa">
          <title>whatsapp</title>
          <path
            d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
        </svg></a>
    </div>
  </div>

  <!-- enter -->
  <div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>

  <!-- footer -->
  <!-- footer -->
  <div class="container-fluid footer">
    <div class="footer-isi">
      <div class="alamat">
        <h3>Gunung Batur Guide</h3>
        <p>
          Jalan Sukaluwih, Banjar Gentong, Tegalalang, Gianyar, <br />
          Bali, 80561, Indonesia.
        </p>
        <p>Telepon: +6282 3593 65098</p>
        <p>Email: info@balitrekkingtour.com</p>
      </div>
      <div class="company">
        <h3>Bali Trekking Tour Company</h3>
        <img src="gambar/logonew.png" alt="" />
        <p>
          Welcome to Bali Trekking Tour : Journey to the spirit of Bali, The
          explorations of the spirit mountains, unique Bali cultures and its
          traditions.
        </p>
        <p>
          Bali Trekking Tour provide services as Bali Trekking Tours, Bali
          full Day Tours, Bali Adventure Tours and Bali Overnight Tours! Let's
          choose & book your tour with us!
        </p>
      </div>
      <div class="medsos">
        <h3>Our Media Social</h3>
        <div class="medsos1">
          <div class="medsos2">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 448 512">
                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>&nbsp; &nbsp; @balitrackingtour</a>
          </div>
          <div class="medsos2">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 512 512">
                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
              </svg>&nbsp; &nbsp;@balitrackingtour</a>
          </div>
          <div class="medsos2">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 512 512">
                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
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
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="front/landingpage/landingpage.js"></script>
    <script src="front/navbar/navbar.js"></script>
    <script src="https://kit.fontawesome.com/5b90b4fa74.js" crossorigin="anonymous"></script>
  </div>
</body>

</html>


