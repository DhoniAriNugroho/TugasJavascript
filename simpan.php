<?php
      include "koneksisd.php"; 
      $NPSN = $_POST['NPSN'];
      $NAMA_SD = $_POST['NAMA_SD'];
      $KELURAHAN = $_POST['KELURAHAN'];
	  $KECAMATAN = $_POST['KECAMATAN'];
	  $KABUPATEN = $_POST['KABUPATEN'];
      $simpan = mysql_query("Insert Into sd values('$NPSN','$NAMA_SD','$KELURAHAN', '$KECAMATAN', '$KABUPATEN')");
      header('location:home.php');
?>