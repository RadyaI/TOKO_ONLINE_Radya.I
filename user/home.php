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
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome <?=$_SESSION['nama']?></h6>
                  <h4><em>Silahkan</em> Cari barang yang anda suka</h4>
                </div>
              </div>
            </div>
          </div><br>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
         <!-- Daftar Barang -->
<div class="row">
    <?php 
    include "../koneksi.php";
    $qry_barang=mysqli_query($sambung,"select * from produk");
    while($data_barang=mysqli_fetch_array($qry_barang)){
        ?>
        <div class="col-lg-3 col-sm-6">
            <div class="item" style=" padding-bottom:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:10px; "><br>
              <img src="../foto_produk/<?=$data_barang['foto_produk']?>"  style="width:170px;height:175px; margin-left:30px; border-radius:10%;">
              <div class="card-body"><br>
                <b><p class="card-text text-light" align="center" style="overflow:hidden; white-space:nowrap; text-overflow:ellipsis;"><?=$data_barang['nama_produk']?></p></b>
                <hr style="color:white;">
                <p align="center" class="text-light">Rp <?=$data_barang['harga']?></p>
              <a href="masuk_keranjang.php?id_produk=<?=$data_barang['id_produk']?>" style="margin-left:3px; position:absolute; margin-top:-25px;"><i class="fa fa-shop"></i></a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
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
