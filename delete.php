<?php
include "koneksisd.php"; 
$nomor = $_GET['id'];
$hapusdata = mysql_query("DELETE FROM `sd` WHERE NPSN='$nomor'");
if(!$hapusdata )
{
die('Gagal Hapus data: ' . mysql_error());
} else{
echo "Berhasil Hapus data. <a href='homeadmin.php'>Lihat Data</a>";
}
?>