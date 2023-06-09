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
</head>

<body>
  <nav class="navbar">
    <a href="#" class="navbar-logo">Mykedelai</a>
    <div class="navbar-nav">
      <a href="#">Home</a>
      <a href="#produk">Produk</a>
      <a href="#transaksi">Transaksi</a>
      <a href="#about">About</a>
    </div>

    <div class="navbar-extra">
      <a href="login.php" id="user">masuk</a>
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
    <h2>ABOUT</h2>

    <div class="row">
      <div class="about-img">
        <img class="about-img" src="img/tentang 2.jpg" alt="tentang kami" />
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

    <?php
    include "conn.php";
    $sql = "SELECT * FROM barang";
    $result = mysqli_query($mysqli, $sql);
    $nomor = 1;
    ?>
    <?php
    while ($data = mysqli_fetch_array($result)) {
      ?>
      <div class="produk-list1">
        <img class="produk-list-img" src="images/<?php echo $data['gambar_barang']; ?>" alt="gjh" />
        <h4 class="produk-list-title">
          <?php echo $data['nama_barang']; ?>
        </h4>
        <p class="harga">
          RP
          <?php echo $data['harga']; ?>
        </p>
      </div>
    <?php } ?>
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