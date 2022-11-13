<?php
include'../header.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home.html" class="logo">
                    <h1 style="color:pink;">RADYA</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="home.php" class="active">Home</a></li>
                        <li><a href="https://www.tokopedia.com/"  onclick="return confirm('Anda akan menuju tokopedia')" target="_blank">Browse</a></li>                        <!-- <li><a href="details.php">Details</a></li> -->
                        <!-- <li><a href="details.php">Details</a></li> -->
                        <li><a href="profile.php">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
         
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
         <!-- Daftar Barang -->
         <?php
         include'../koneksi.php';
         $qry_produk=mysqli_query($sambung,"select * from produk where id_produk = '".$_GET['id_produk']."'");
         $data_produk=mysqli_fetch_array($qry_produk);
         ?>
<div class="row">
   <div class="col">
   <img src="../foto_produk/<?=$data_produk['foto_produk']?>" style="width:200px;height:215px; margin-left:30px; border-radius:10%;" alt="">
   </div>
   <div class="col">
        <h2><?=$data_produk['nama_produk'];?></h2><br>
        <h5>Rp <?=$data_produk['harga']?></h5>
        <hr style="color:white;">
        <span class="text-light">Detail :</span>
        <hr style="color:white;">
        <p style="color:white;"><?=$data_produk['deskripsi']?></p>
    </div>
    <div class="col">
      <div class="card" style="width: 23rem; background-color:DimGrey;">
          <div class="card-body text-light">
            <form action="beli_langsung.php?id_produk=<?=$data_produk['id_produk']?>" method="POST">
              Jumlah:
              <input type="number" name="jumlah" class="form-control" value="1">
              <input type="hidden" name="id_produk" value="<?=$data_produk['id_produk']?>">
              <input type="hidden" name="nama_produk" value="<?=$data_produk['nama_produk']?>">
              <input type="hidden" name="foto_produk" value="<?=$data_produk['foto_produk']?>">
              <input type="hidden" name="harga" value="<?=$data_produk['harga']?>"><br>
              <div class="row">
                <div class="col">
                <input type="submit" onclick="return confirm('Ingin membeli barang ini?')" class="btn btn-primary" value="+ Beli">
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
</div>

          <!-- ***** Daftar barang End ***** -->
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
       
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
