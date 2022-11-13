<?php
include'../koneksi.php';
session_start();

$qry_barang=mysqli_query($sambung,"select * from produk where id_produk = '".$_GET['id_produk']."'");
$data_produk=mysqli_fetch_array($qry_barang);

$id_produk=$data_produk['id_produk'];
$nama_produk=$data_produk['nama_produk'];
$foto_produk=$data_produk['foto_produk'];
$tgl_beli=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));

if($_POST){
    $jumlah=$_POST['jumlah'];
    $insert=mysqli_query($sambung,"insert into transaksi (id_produk,id_user,nama_produk,foto_produk,jumlah,tgl_beli,status) value ('".$id_produk."','".$_SESSION['id_user']."','".$nama_produk."','".$foto_produk."','".$jumlah."','".$tgl_beli."','Proses')");
    if($insert){
        echo"<script>alert('Sukses membeli barang'); location.href='home.php';</script>";
    }else{
        echo"<script>alert('Gagal membeli barang'); location.href='home.php';</script>";
    }
}

?>