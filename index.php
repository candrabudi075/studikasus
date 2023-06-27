<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
  <title>Menu Beranda</title>
</head>
<body>
<header class="header">
    <div class="header-inner">
      <div class="container-fluid px-lg-5">
        <nav class="navbar navbar-expand-lg my-navbar">
          <a class="navbar-brand" href="index.php"><span class="logo">Toko Hp Bekas</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="produk.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pelanggan.php">Pelanggan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transaksi.php">Daftar Pembeli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about1.php">About</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <section class="content-banner">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="banner-con text-center">
            <p class="first-title">Welcome To Toko HP Bekas</p>
            <p class="banner-des">tksmard12@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col6">
            <div class="hp">
              <h1>Selamat Datang Di toko Penjualan HP Bekas kami</h1>
              <p style="padding-left: 10px;">ingin Hp Murah dan aman semua ada di toko kami dan harga sangat terjangkau.
                di bawah ini kami memperlihatkan merek hp apa saja dijual di toko kami
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-5">
          <div class="gamabar">
            <div class="row">
              <img src="hp/realme.png" class="realme">
              <img src="hp/xiaomi.png" class="xiaomi">
              <img src="hp/infinix.png" class="infinix">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h3>Selamat datang di web toko kami, tempat terbaik untuk membeli hp bekas berkualitas</h3>
        <h4><b>Kualitas Terjamin</b></h4>
        <p style="padding-left: 20px;">Setiap hp bekas yang kami tawarkan telah melalui proses seleksi ketat untuk memastikan kualitasnya. Anda bisa yakin bahwa produk yang Anda beli adalah yang terbaik.</p>
        <h4><b>Harga Bersaing</b></h4>
        <p style="padding-left: 20px;">Kami mengutamakan harga yang kompetitif agar Anda bisa mendapatkan hp bekas berkualitas dengan harga terbaik. Bandingkan dan buktikan sendiri</p>
        <h4><b>Garansi Terpercaya</b></h4>
        <p style="padding-left: 20px;">Setiap pembelian hp bekas di web toko kami dilengkapi dengan garansi yang dapat memberikan kepastian dan perlindungan tambahan bagi Anda</p>
        <a href="produk.php"><button type="button" class="btn btn-primary">Beli SmardPhone</button></a>
        <img src="hp/smardphone.png" width="75px" height="75px">
      </div>
    </section>
    <div>
      <footer class="footer">
        <div class="container">
          <p>&copy; 2023 M Saifullah Candra Budi Laksono. TOKO HP BEKAS Terpercaya</p>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">
    $(function() {
      var navbar = $('.header-inner');
      $(window).scroll(function() {
        if ($(window).scrollTop() <= 40) {
          navbar.removeClass('navbar-scroll');
        } else {
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
</body>
</html>