<!DOCTYPE html>
<html>
<head>
  <title>Menu Produk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  include "connect.php";
  $query = mysqli_query($conn, "SELECT * FROM produk");
  ?>
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
            <p class="first-title">Menu Produk</p>
            <p class="banner-des">tksmard12@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container card mt-5">
    <div class="card-body ">
      <table class="table" id="example">
        <thead>
          <tr class="text-center">
            <th>Id_Produk</th>
            <th>Nama_Produk</th>
            <th>Merek</th>
            <th>Kondisi</th>
            <th>Harga</th>
            <th>Tanggal Masuk</th>
            <th>pembelian</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($query) > 0) {
          ?>
            <?php
            while ($value = mysqli_fetch_array($query)) {
            ?>
              <tr class="text-center">
                <td><?php echo $value["id_produk"]; ?></td>
                <td><?php echo $value["nama_produk"]; ?></td>
                <td><?php echo $value["merek"]; ?></td>
                <td><?php echo $value["kondisi"]; ?></td>
                <td>Rp <?php echo $value["harga"]; ?></td>
                <td><?php echo $value["tgl_masuk"]; ?></td>
                <td>
                  <a class="btn btn-primary" href="pembelian.php?id_produk=<?php echo $value["id_produk"] ?>">Beli</a>
                </td>
              </tr>
            <?php
              $no++;
            } ?>
          <?php } ?>
        </tbody>
        <tr>
          <td>
            <a class="btn btn-primary" href="pelanggan.php">Jadi Pelanggan</a>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div>
    <footer class="footer">
      <div class="container">
        <p>&copy; 2023 M Saifullah Candra Budi Laksono. TOKO HP BEKAS Terpercaya</p>
      </div>
    </footer>
  </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    });
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