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
                        <input type="text" placeholder="Type Something" autocomplete="off" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="https://www.tokopedia.com/" target="_blank">Browse</a></li>
                        <!-- <li><a href="details.php">Details</a></li> -->
                        <li><a href="data_user.php">Data User</a></li>
                        <li><a href="profile.php" class="active">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
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
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="assets/images/profile.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <?php
                  include'../koneksi.php';
                  $qry_user=mysqli_query($sambung,"select * from user");
                  $data_user=mysqli_fetch_array($qry_user);
                  ?>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                        <a href="#"><span><?=$_SESSION['status']?></span></a>
                        <h5><?=$_SESSION['nama']?></h5><br>
                      <p>Alamat:<b style="color:white; margin-left:40px;">  <?=$data_user['alamat']?></b></p>
                      <p>Telepon:<b style="color:white; margin-left:35px;">  <?=$data_user['no_tlp']?></b></p>  
                      <p>Gender:<b style="color:white; margin-left:38px;">  <?=$data_user['gender']?></b></p>
                      <div class="main-border-button">
                          <a href="../logout.php" onclick="return confirm('Ingin logout?')">LogOut</a>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library profile-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Data</em> Pesanan </h4>
              </div>
              <table class="table">
                  <thead class="bg-light text-dark" style="border:5px solid pink;">
                        <th>ID User</th><th>Foto Produk</th><th>Nama Produk</th>
                        <th>Jumlah</th><th>Tgl Beli</th><th>Status</th><th>Aksi</th>
                  </thead>
                  <tbody class="text-light">
                          <?php
                          include'../koneksi.php';
                          $qry_history=mysqli_query($sambung,"select * from transaksi order by id_transaksi desc");
                          $no=0;
                          while($data_history=mysqli_fetch_array($qry_history)){

                            if($data_history['status'] == 'Sampai' ){
                                $button_update="";
                            }else{
                                $button_update="<a href='update_pesanan.php?id_transaksi=".$data_history['id_transaksi']."> <input type='button' class='btn btn-primary'>Update</a>";
                            }
                            
                            $no++;
                            ?>

                            <tr>
                              <td><?=$data_history['id_user']?></td> 
                              <td><img src="../foto_produk/<?=$data_history['foto_produk']?>" style="width:100px;height:115px;"></td>
                              <td><?=$data_history['nama_produk'];?></td>
                              <td><?=$data_history['jumlah']?></td>
                              <td><?=$data_history['tgl_beli']?></td>
                              <td><?=$data_history['status']?></td>
                              <td><?=$button_update?></td>
                            </tr>

                            <?php
                          }
                          ?>
                  </tbody>
                </table>
            </div>
          </div>
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
