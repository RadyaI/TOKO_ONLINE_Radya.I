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
                        <li><a href="home.php" >Home</a></li>
                        <li><a href="https://www.tokopedia.com/" target="_blank">Browse</a></li>                        <!-- <li><a href="details.php">Details</a></li> -->
                        <li><a href="data_user.php" class="active">DATA USER</a></li>
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
          <form action="proses_tambah_user.php" method="POST" class="text-light">
              Nama:
              <input type="text" class="form-control" autocomplete="off" name="nama">
              Gender:
              <select name="gender" class="form-control" id="">
                <option value="-">-</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
              </select>
              Alamat:
              <input type="text" class="form-control" autocomplete="off" name="alamat">
              Telepon:
              <input type="text" class="form-control" autocomplete="off" name="telepon">
              Username:
              <input type="text" class="form-control" autocomplete="off" name="username">
              Password:
              <input type="text" class="form-control" autocomplete="off" name="password">
              Status:
              <select name="status" class="form-control"id="">
                <option value="-">-</option>
                <option value="user">User</option>
                <option value="petugas">Petugas</option>
              </select>
              <br>
              <input type="submit" class="btn btn-primary">
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
