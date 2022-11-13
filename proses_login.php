<?php
session_start();
$_SESSION['status_login']=true;
include'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($sambung,"select * from user where password='$password' and username='$username'");
$cek=mysqli_num_rows($login);

if($cek>0){
	$data=mysqli_fetch_assoc($login);

	if($data['status']=='petugas'){
		//SESSION
		$_SESSION['username']=$username;
		$_SESSION['status']="petugas";
		$_SESSION['nama']=$data['nama'];
		$_SESSION['id_user']=$data['id_user'];
		header("location:petugas/home.php");
	}elseif($data['status']=='user'){
		//SESSION
		$_SESSION['status']="user";
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['nama']=$data['nama'];
		$_SESSION['id_user']=$data['id_user'];
		header("location:user/home.php");
	}else{
		echo"<script>alert('Username dan password tidak sesuai '); location.href='index.php';</script>";
	}
}else{
	echo"<script>alert('Username dan password tidak sesuai '); location.href='index.php';</script>";

}
?>