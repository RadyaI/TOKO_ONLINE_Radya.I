<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

    include'../koneksi.php';
    $update=mysqli_query($sambung,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."',harga='".$harga."' where id_produk = '".$id_produk."'");
        if($update){
        echo"<script>alert('Sukses ubah produk'); location.href='home.php';</script>";
    }else{
        echo"<script>alert('Gagal ubah produk'); location.href='home.php';</script>";
    }
}
?>