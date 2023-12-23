<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Transport/transport.css" />
  <link rel="stylesheet" href="../navbar/navbar.css" />
  <link rel="stylesheet" href="../tour/tour.css" />
  <link rel="stylesheet" href="../footer/footer.css" />
  <title>Transport</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Domine&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">


  <!-- navbar -->
  <!-- google font navbar -->
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans&display=swap" rel="stylesheet" />
  <!-- google font batur guide -->
  <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap" rel="stylesheet" />

  <!-- footer -->
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Inter&family=Ysabeau+Infant:wght@700&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!--Navbar-->
  <nav class="navbar container-fluid navbar-expand-md navbar-light fixed" style="position: fixed">
    <div class="container-fluid">
      <!-- Logo navbar -->
      <a class="navbar-brand logo" href="index.html"><img src="../gambar/logonew.png" alt="logo" width="105px" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-lg collapse navbar-collapse justify-content-end navbara" id="navbarNavDropdown">
        <ul class="navbar-nav navbarb">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tracking/tracking.html">Bali Tracking</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../Transport/transport.html">Bali Transport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tour/tour.html">Bali Tour</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- carousel item -->
  <div class="carousel">
    <img src="https://gunungbaturguide.com/img/cover2.webp" alt="Gambar 1" class="active" />
    <img src="https://gunungbaturguide.com/img/cover1.webp" alt="Gambar 2" />

    <div class="carousel-indicators" style="display: flex; z-index: 1">
      <span class="active" onclick="jumpToSlide(1)"></span>
      <span onclick="jumpToSlide(2)"></span>
    </div>

    <header class="align-item-end">
      <div class="tittle">
        <span>SCROLL & EXPLORE</span>
      </div>
    </header>
  </div>

  <!--ITEM MOBIL-->
  <!-- judul atas -->
  <div class="container">
    <header class="entry-header">
      <h1 class="entry-tittle text-center">
        Need a car to explore amazing Bali ?
      </h1>
    </header>
    <hr />
    <div class="entry-content">
      <h2 class="text-center">Available Car Self Drive :</h2>
    </div>
  </div>

  <div class="container">
    <div class="gap">
      <!-- mobil 1 -->
      <div class="card-mobil">
        <h2>Daihatsu XENIA – Manual Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/xenia.jpg" alt="" width="250px" />
          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $27 / Day</p>
            </div>
            <div class="harga2">
              <p>Day7 – 13 Days : US $25 / Day14</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $23 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Medium size family car, Power steering, Air-conditioning,Child
                safety door lock, Safety belts, Electric windows, Radio,
                CD-player, Comfortable: 4 adults, 1 child, 2 large bag & 2
                small bags, Engine size: 1.300cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>

      <!-- mobil 2 -->
      <div class="card-mobil">
        <h2>Daihatsu TERIOS – Automatic Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/terios.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $35 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $33 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $30 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Medium size SUV-AT model car, Power steering, Dual SRS
                Airbag,Power steering, Dual SRS Airbag,Child safety door lock,
                Safety belts,Radio, CD-player, AUX & USB port, Comfortable: 4
                adults, 1 child, 3 large bag & 2 small bags, Engine size:
                1.500cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 3 -->
      <div class="card-mobil">
        <h2>Honda BRIO – Automatic Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/brio.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $30 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $28 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $26 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for couple or small family, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, Bluetooth, AUX & USB
                port, Comfortable: 4 adults, 1 large bag & 1 small bag, Engine
                size: 1.200cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>

      <!-- mobil 4 -->
      <div class="card-mobil">
        <h2>Suzuki APV – Manual Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/apv.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $35 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $30 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $28 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for big family or group, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, AUX & USB port,
                Comfortable: 6 adults, 1 child, 2 large bag & 2 small bags,
                Engine size: 1.500cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 5 -->
      <div class="card-mobil">
        <h2>Toyota AGYA – Manual Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/agya.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $25 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $23 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $20 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for couple or small family, Power steering,
                Air-conditioning, Child safety door lock, Safety belts,
                Electric windows, Radio, CD-player, AUX & USB port,
                Comfortable: 4 adults, 1 large bag & 1 small bag , Engine
                size: 1.200cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>

      <!-- mobil 6 -->
      <div class="card-mobil">
        <h2>Toyota AGYA – Automatic Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/agya.jpg" alt="" width="250px" />
          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $27 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $25 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $23 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for couple or small family, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, AUX & USB port,
                Comfortable: 4 adults, 1 large bag & 1 small bag, Engine size:
                1.200cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 7 -->
      <div class="card-mobil">
        <h2>Toyota AVANZA – Manual Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/xenia.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $30 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $28 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $25 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Medium size family car, Power steering, Air-conditioning,
                Child safety door lock, Safety belts, Electric windows, Radio,
                CD-player, Comfortable: 4 adults, 1 child, 2 large bag & 2
                small bags, Engine size: 1.300cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>

      <!-- mobil 8 -->
      <div class="card-mobil">
        <h2>Toyota AVANZA – Automatic Transmission</h2>
        <div class="bungkus">
          <div class="gambar">
            <img src="../gambar/mobil/xenia.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $32 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $30 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $27 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Medium size family car, Power steering, Dual SRS Airbag,
                Air-conditioning, Electric windows, Child safety door lock,
                Safety belts, Radio, CD-player, AUX & USB port, Comfortable: 4
                adults, 1 child, 2 large bag & 2 small bags, Engine size:
                1.300cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 9 -->
      <div class="card-mobil mobil9">
        <h2>Toyota Kijang INNOVA – Manual Transmission</h2>
        <div class="bungkus">
          <div class="gambar gambar2">
            <img src="../gambar/mobil/inova.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>1 – 6 Days : US $40 / Day</p>
            </div>
            <div class="harga2">
              <p>7 – 13 Days : US $37 / Day</p>
            </div>
            <div class="harga3">
              <p>14 + Days : US $35 / Day</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for big family or group, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, AUX & USB port,
                Comfortable: 6 adults, 1 child, 2 large bag & 2 small bags,
                Engine size: 2.000cc
              </p>

            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <!-- syarat ketentuan -->
    <div class="sk">
      <h3>Self-drive tariffs above are inclusive of :</h3>
      <div class="sk1">
        <p>1. 21% Government Tax and Service Charges.</p>
        <p>
          2. Full cover car rental Insurance (all risk) such all damage
          waivers, theft of the car or any part of it with own risk excess
          ONLY US $35. 00/accident (in case of accident).
        </p>
        <p>
          3. Car rental delivery and picked up arrangement within Denpasar
          Airport or direct to your hotel for territorial of Nusa Dua,
          Jimbaran, Sanur, Kuta, Canggu and Ubud
        </p>
        <p>4. Unlimited mileage around the Island of Bali only.</p>
        <p>5. Replacement car if fatal damages.</p>
        <p>
          6. The improvement and the maintenance of the vehicle for the
          leasing
        </p>
      </div>
    </div>

    <!-- include driver -->
    <div class="container">
      <hr />
      <div class="entry-content">
        <h2 class="text-center">Available Car With Driver :</h2>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 1 -->
      <div class="card-mobil">
        <h2>Daihatsu XENIA – with English speaking driver</h2>
        <div class="bungkus">
          <div class="gambar gambar2">
            <img src="../gambar/mobil/xenia.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>US $50. 00 / day</p>
            </div>
            <div class="harga2">
              <p>(use up to 10-hours a day)</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for big family or group, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, AUX & USB port,
                Comfortable: 6 adults, 1 child, 2 large bag & 2 small bags,
                Engine size: 2.000cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
      <!-- mobil 2 -->
      <div class="card-mobil">
        <h2>Suzuki APV – with English speaking driver</h2>
        <div class="bungkus">
          <div class="gambar gambar2">
            <img src="../gambar/mobil/apv.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>US $60. 00 / day</p>
            </div>
            <div class="harga2">
              <p>(use up to 10-hours a day)</p>
            </div>
            <div class="deskripsi">
              <p>
                Suits for big family or group, Power steering, Dual SRS
                Airbag, Air-conditioning, Electric windows, Child safety door
                lock, Safety belts, Radio, CD-player, AUX & USB port,
                Comfortable: 6 adults, 1 child, 2 large bag & 2 small bags,
                Engine size: 1.500cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <div class="gap">
      <!-- mobil 3 -->
      <div class="card-mobil">
        <h2>Toyota HIACE – with English speaking driver</h2>
        <div class="bungkus">
          <div class="gambar gambar2">
            <img src="../gambar/mobil/hiace.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>US $120. 00 / day</p>
            </div>
            <div class="harga2">
              <p>(use up to 10-hours a day)</p>
            </div>
            <div class="deskripsi">
              <p>
                Luxury minivan by Toyota Motors, Fully Air-conditioned, Child
                safety door lock, Radio, CD-player, AUX & USB port , Maximum
                capacity: 12 – 14 persons, Engine size: 2.700cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
      <!-- mobil 4 -->
      <div class="card-mobil">
        <h2>Isuzu ELF – with English speaking driver</h2>
        <div class="bungkus">
          <div class="gambar gambar2">
            <img src="../gambar/mobil/elf.jpg" alt="" width="250px" />

          </div>
          <div class="keterangan">
            <div class="harga1">
              <p>US $95. 00 / day</p>
            </div>
            <div class="harga2">
              <p>(use up to 10-hours a day)</p>
            </div>
            <div class="deskripsi">
              <p>
                Mini Busess by Isusu Motor, Fully Air-conditioning, Child
                safety door lock, Radio, CD-player, AUX & USB port , Maximum
                capacity: 12 – 14 persons including driver, Engine size:
                2.000cc
              </p>
            </div>
          </div>
        </div>
        <div class="book-wa">
          <a href="https://wa.me/6282359365098">BOOK NOW</a>
        </div>
      </div>
    </div>

    <hr />
    <!-- sk 2 -->
    <div class="sk">
      <h3>RENTAL CONDITIONS WITH DRIVER :</h3>
      <div class="sk3">
        <p>1. Cost of petrol is included on the above rate quoted..</p>
        <p>
          2. Rental rate for use up to 10-hours a day, extra hours available @
          US $4. 50/hour
        </p>
        <p>3. Rental rate inclusive Government Tax and Service Charge</p>
        <p>4. Rental rate inclusive of vehicle insurance</p>
      </div>
    </div>
  </div>

  <!-- jarak -->
  <div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>

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
        <img src="../gambar/logonew.png" alt="" />
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

  <!-- script -->
  <div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="../tour/tour.js"></script>
    <script src="../navbar/navbar.js"></script>
  </div>
</body>

</html>