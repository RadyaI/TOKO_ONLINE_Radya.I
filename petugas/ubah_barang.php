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
                    <a href="home.php" class="logo">
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
                        <li><a href="https://www.tokopedia.com/" target="_blank">Browse</a></li>                        <!-- <li><a href="details.php">Details</a></li> -->
                        <li><a href="data_user.php">DATA USER</a></li>
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
    
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main">
            <h3 align="center">Ubah Barang</h3><br>
            <?php
            include'../koneksi.php';
            $qry_barang=mysqli_query($sambung,"select * from produk where id_produk ='".$_GET['id_produk']."'");
            $data_barang=mysqli_fetch_array($qry_barang);
            ?>
            <form action="proses_ubah_barang.php" method="POST" class="text-light" >
              <input type="hidden" name="id_produk" value="<?$data_barang['id_produk']?>">
              Nama Produk:
              <input type="text" class="form-control" name="nama_produk" value="<?=$data_barang['nama_produk']?>">
              deskripsi:
              <input type="textarea" class="form-control" name="deskripsi" value="<?=$data_barang['deskripsi']?>">
              Harga:
              <input type="text" class="form-control" name="harga" value="<?=$data_barang['harga']?>"><br>
              <input type="submit" class="btn btn-primary" >
            </form>
          </div>
          <!-- ***** Banner End ***** -->

          

          <!-- ***** Most Popular Start ***** -->
          
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
         
           
          </div>
          <!-- ***** Gaming Library End ***** -->
       
    </div>
  </div>
  
 


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
 -->

  </body>

</html>
