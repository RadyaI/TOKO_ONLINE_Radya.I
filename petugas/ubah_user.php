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
            <h3 align="center">UBAH USER</h3><br>
            <?php
            include'../koneksi.php';
            $qry_user=mysqli_query($sambung,"select * from user where id_user = '".$_GET['id_user']."'");
            $data_user=mysqli_fetch_array($qry_user);
            ?>
          <form action="proses_ubah_user.php" method="POST" class="text-light">
            <input type="hidden" name="id_user" value="<?=$data_user['id_user']?>">
              Nama:
              <input type="text" class="form-control" autocomplete="off" name="nama" value="<?= $data_user['nama']?>">
              Alamat:
              <input type="text" class="form-control" autocomplete="off" name="alamat" value="<?=$data_user['alamat']?>">
              Telepon:
              <input type="text" class="form-control" autocomplete="off" name="telepon" value="<?=$data_user['no_tlp']?>">
              Username:
              <input type="text" class="form-control" autocomplete="off" name="username" value="<?=$data_user['username']?>">
              Status:
              <select name="status" class="form-control"id="">
                <?php
                $qry_status=mysqli_query($sambung,"select * from user where id_user= '".$_GET['id_user']."'");
                while($data_status=mysqli_fetch_array($qry_status)){
                  echo'<option value="'.$data_status['id_user'].'">'.$data_status['status'].'</option>';
                }
                ?>
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
