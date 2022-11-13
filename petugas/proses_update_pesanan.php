<?php
include'../koneksi.php';
if($_POST){
  $id_transaksi=$_POST['id_transaksi'];
  $tgl_selesai=$_POST['tgl_selesai'];
  $status=$_POST['status'];

  $insert=mysqli_query($sambung,"update transaksi set tgl_selesai='".$tgl_selesai."',status='".$status."' where id_transaksi = '".$id_transaksi."'");

    if($insert){
      echo"<script>alert('Sukses ubah status pesanan'); location.href='profile.php';</script>";
  }else
  echo"<script>alert('Gagal ubah status pesanan'); location.href='profile.php';</script>";
}
?>