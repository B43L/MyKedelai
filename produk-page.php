<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@600&display=swap"
    rel="stylesheet" />
  <!-- Link css -->
  <link rel="stylesheet" href="produk-page.css" />
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Mykedelai</a>

    <div class="navbar-nav">
      <a href="#">Home</a>
      <a href="#produk">Produk</a>
      <a href="#transaksi">Transaksi</a>
      <a href="#about">About</a>
    </div>

  </nav>
  <!-- Navbar end -->
  <div class="produk-detail">
    <div class="flex-container">
      <img class="produk-img" src="img/tentang.jpg" alt="" />
      <div>
        <h1 class="produk">Kedelai Cap Gajah</h1>
        <p class="harga-jumlah">RP 11.250</p>
        <p class="harga-jumlah">Jumlah</p>
        <div class="flex-container">
          <input class="input" type="number" />
          <span>stok : 10</span>
        </div>
        <div class="btn-container">
          <button class="tambah-keranjang">Tambah Keranjang</button>
          <button class="beli-sekarang">Beli Sekarang</button>
        </div>
      </div>
    </div>
    <hr />
    <h3>Produk Detail :</h3>
    <p class="detail">
      Berat Satuan : 1 kg
      <br />
      Supplier : matsubo
    </p>

    <hr />
    <h3>Deskripsi :</h3>
  </div>
</body>

</html>