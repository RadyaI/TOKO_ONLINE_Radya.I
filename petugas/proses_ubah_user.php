<?php
if($_POST){
  $id_user=$_POST['id_user'];
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $telepon=$_POST['telepon'];
  $username=$_POST['username'];

include'../koneksi.php';
$update=mysqli_query($sambung,"update user set nama='".$nama."',alamat='".$alamat."',no_tlp='".$telepon."',username='".$username."' where id_user = '".$id_user."'");
    if($update){
    echo"<script>alert('Sukses ubah user'); location.href='data_user.php';</script>";
  }else{
    echo"<script>alert('Gagal ubah user'); location.href='data_user.php';</script>";
  }
}

?>