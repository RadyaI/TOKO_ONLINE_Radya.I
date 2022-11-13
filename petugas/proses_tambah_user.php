<?php
if($_POST){
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $telepon=$_POST['telepon'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $status=$_POST['status'];
  $gender=$_POST['gender'];

  if(empty($nama)){
    echo"<script>alert('Nama tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }elseif(empty($alamat)){
    echo"<script>alert('Alamat tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }elseif(empty($telepon)){
    echo"<script>alert('Telepon tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }elseif(empty($username)){
    echo"<script>alert('Username tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }elseif(empty($password)){
    echo"<script>alert('Password tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }elseif(empty($status)){
    echo"<script>alert('Status tidak boleh kosong'); location.href='tambah_user.php';</script>";
  }else{
    include'../koneksi.php';
    $insert=mysqli_query($sambung,"insert into user (nama,gender,alamat,no_tlp,username,password,status) value ('".$nama."','".$gender."','".$alamat."','".$telepon."','".$username."','".$password."','".$status."')");

    if($insert){
      echo"<script>alert('Sukses tambah user'); location.href='data_user.php';</script>";
    }else{
      echo"<script>alert('Gagal tambah user'); location.href='data_user.php';</script>";
    }
  }

}

?>