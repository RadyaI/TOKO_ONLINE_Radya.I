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
                        <li><a href="home.php" >Home</a></li>
                        <li><a href="https://www.tokopedia.com/" target="_blank">Browse</a></li>
                        <!-- <li><a href="details.php">Details</a></li> -->
                        <li><a href="data_user.php" class="active">Data User</a></li>
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
          <div class="main">
                <div class="header-text">
                <div class="heading-section">
                  <h4 align="center">Data Petugas</h4>
                </div>
                 
                <a href="tambah_user.php"><input type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:LightPink; border:2px solid purple;" value="Tambah User"></a><br><br>
                 
                </div>  
                <table class="main-table table ">
                      <thead class="bg-light text-dark" style="border:5px solid pink;">
                          <th>No</th><th>ID</th><th>Nama</th><th>Gender</th>
                          <th>Telepon</th><th>Status</th><th>Aksi</th>
                      </thead>
                      <tbody class="text-light">
                          <?php
                          include'../koneksi.php';
                          $user=mysqli_query($sambung,"select * from user where status = 'petugas'");
                          $No=0;
                          while($data_user=mysqli_fetch_array($user)){
                            $No++;
                            ?>

                            <tr>
                              <td><?=$No?></td>
                              <td><?=$data_user['id_user']?></td>
                              <td><?=$data_user['nama']?></td>
                              <td><?=$data_user['gender']?></td>
                              <td><?=$data_user['no_tlp']?></td>
                              <td><?=$data_user['status']?></td>
                            <td>
                              <a href="ubah_user.php?id_user=<?=$data_user['id_user']?>"><input type="button" class="btn btn-primary" value="Ubah"></a>
                              <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Ingin menghapus data ini?')" ><input type="button" class="btn btn-danger" value="Hapus"></a>
                            </td> 

                            <?php
                          }
                          ?>
                      </tbody>
                </table>
          </div>
          <!-- ***** Banner End ***** -->

          

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4 align="center">Data Pelanggan</h4>
                </div>
                <table class="main-table table ">
                      <thead class="bg-light text-dark" style="border:5px solid pink;">
                          <th>No</th><th>ID</th><th>Nama</th><th>Gender</th>
                          <th>Telepon</th><th>Status</th><th>Aksi</th>
                      </thead>
                      <tbody class="text-light">
                          <?php
                          include'../koneksi.php';
                          $user=mysqli_query($sambung,"select * from user where status = 'user'");
                          $No=0;
                          while($data_user=mysqli_fetch_array($user)){
                            $No++;
                            ?>

                            <tr>
                              <td><?=$No?></td>
                              <td><?=$data_user['id_user']?></td>
                              <td><?=$data_user['nama']?></td>
                              <td><?=$data_user['gender']?></td>
                              <td><?=$data_user['no_tlp']?></td>
                              <td><?=$data_user['status']?></td>
                            <td>
                              <a href="ubah_user.php?id_user=<?=$data_user['id_user']?>"><input type="button" class="btn btn-primary" value="Ubah"></a>
                              <a href="hapus_user.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Ingin menghapus data ini?')" ><input type="button" class="btn btn-danger" value="Hapus"></a>
                            </td> 

                            <?php
                          }
                          ?>
                      </tbody>
                </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
        w Your Library</a>
              </div>
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
          <p>Copyright © 2022 <a href="#">Radya</a> Company. All rights reserved. 
          
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
