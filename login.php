<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$query2=mysql_query("select * from pengguna where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
$cek2=mysql_num_rows($query2);
$a=mysql_fetch_array($query);
$b=mysql_fetch_array($query2);
if($cek){
$_SESSION['username']=$username; 
 ?>Anda berhasil login. silahkan menuju <a href="homeadmin.php">Halaman HOME ADMIN</a><?php
}
elseif($cek2){
	$_SESSION['username']=$username; 
 ?>Anda berhasil login. silahkan menuju <a href="homepengguna.php">Halaman HOME USER</a><?php
}else{
 ?>Anda gagal login. silahkan <a href="form.php">Login kembali</a><?php
 echo mysql_error();
}
?> 
