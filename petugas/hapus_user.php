<?php

if($_GET['id_user']){
  include '../koneksi.php';
  $delete=mysqli_query($sambung,"delete from user where id_user = '".$_GET['id_user']."'");
  if($delete){
    echo"<script>alert('Sukses Hapus user'); location.href='data_user.php';</script>";
  }else{
    echo"<script>alert('Gagal hapus user'); location.href='data_user.php';</script>";
  }
}

?>