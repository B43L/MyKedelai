<?php
session_start();
include("conn.php");
// include("function.php");

// $user_data = check_login($mysqli); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Feather Icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="style.css" />
  />
</head>

<body>
  <!--Navbar Start  -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Mykedelai</a>

    <div class="navbar-nav">
      <a href="#">Home</a>
      <a href="#produk">Produk</a>
      <a href="#transaksi">Transaksi</a>
      <a href="#about">About</a>
    </div>


  </nav>
  <!-- Navbar End -->

  <!-- Hero section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mykedelai</h1>
      <p>
        Menyediakan produk kedelai seperti biji kedelai,<br />tahu, tempe, dan
        lain lain yang berkualitas.
      </p>
      <a href="#produk" class="cta">Beli sekarang</a>
    </main>
  </section>
  <!-- Hero section end -->

  <!-- About Section Start -->
  <section id="about" class="about">
    <h2>About</h2>
    <div class="row">
      <div class="about-img">
        <img src="img/tentang 2.jpg" alt="tentang kami" />
      </div>

      <div class="content">
        <p>
          MyKedelai adalah platform e-commerce yang berfokus pada
          produk-produk berkualitas hasil tani kedelai. Di sini, kami
          menyediakan berbagai produk mulai dari biji kedelai hingga produk
          olahan seperti susu kedelai, tahu, tempe, dan masih banyak lagi.<br /><br />
          Visi kami adalah untuk memfasilitasi masyarakat dalam mendapatkan
          produk berkualitas hasil tani kedelai dengan mudah dan aman. Oleh
          karena itu, kami bekerja sama dengan petani lokal yang ahli dalam
          budidaya kedelai dan memastikan produk yang kami jual berkualitas
          tinggi dan terjamin kebersihannya.<br /><br />
          Kami juga mengutamakan kepuasan pelanggan dengan memberikan layanan
          pengiriman yang cepat dan aman ke seluruh wilayah Indonesia serta
          pelayanan customer service yang profesional dan responsif. Kami
          berkomitmen untuk memberikan pengalaman belanja online yang mudah,
          nyaman, dan memuaskan bagi setiap pelanggan kami.
        </p>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Produk Section Start -->
  <section href="#" id="produk" class="produk">
    <h2>Produk</h2>
  </section>
  <!-- Menu Section End -->

  <!-- Produk Section Start -->
  <div class="container">
    <div class="produk-list1">
      <img class="produk-list-img" src="img/tentang.jpg" alt="gjh" />
      <h4 class="produk-list-title">Kedelai Gajah</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list2">
      <img class="produk-list-img" src="img/kedelai hiu.jpg" alt="hiu" />
      <h4 class="produk-list-title2">Kedelai hiu</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list3">
      <img class="produk-list-img" src="img/tempe.jpg" alt="tempe" />
      <h4 class="produk-list-title3">Tempe</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list4">
      <img class="produk-list-img" src="img/tahu.jpg" alt="tahu" />
      <h4 class="produk-list-title4">Tahu</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list5">
      <img class="produk-list-img" src="img/susu kedelai.jpeg" alt="susu kedelai" />
      <h4 class="produk-list-title5">Susu Kedelai</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list6">
      <img class="produk-list-img" src="img/keripik tempe.jpg" alt="keripik tempe" />
      <h4 class="produk-list-title6">Keripik Tempe</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list7">
      <img class="produk-list-img" src="img/natto.jpg" alt="natto" />
      <h4 class="produk-list-title7">Natto</h4>
      <p class="harga">Rp.11.250</p>
    </div>
    <div class="produk-list8">
      <img class="produk-list-img" src="img/edamame.jpg" alt="" />
      <h4 class="produk-list-title8">Edamame</h4>
      <p class="harga">Rp.11.250</p>
    </div>
  </div>
  <!-- Produk Section End -->

  <!-- footer -->
  <footer>
    <div class="footer-cr">
      <h3>MyKedelai</h3>
      <br>
      <p>copyright &copy;2023 MyKedelai</p>
    </div>
  </footer>

  <!-- Feather Icon -->
  <script>
    feather.replace();
  </script>

</body>

</html>