<?php
//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
  
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
  
//gunakan database universitas
$result=mysql_query('USE sekolah_dasar');
if (!$result)
{
   die("Database mahasiswa gagal digunakan");
}

//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM sd order by KELURAHAN');
?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>DATA SEKOLAH DASAR D.I.Yogyakarta</title>
   <style>
   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#ffff;
      background-color:#00FFFF;
      border-top:1px black solid;
      border-bottom:1px black solid;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #A52A2A; }
   </style>
</head>
<body>
   <h3>DAFTAR SEKOLAH DASAR D.I.Yogyakarta</h3>
<table>
<tr>
   <th>NPSN</th>
   <th>NAMA SD</th>
   <th>KELURAHAN</th>
   <th>KECAMATAN</th>
   <th>KABUPATEN</th>
   <th>ACTION</th>
</tr>

 <?php
 while($row=mysql_fetch_array($result)){
 ?>
 
 <tr>
 <td><?php echo $row['NPSN'];?></td>
 <td><?php echo $row['NAMA_SD'];?></td>
 <td><?php echo $row['KELURAHAN'];?></td>
 <td><?php echo $row['KECAMATAN'];?></td>
 <td><?php echo $row['KABUPATEN'];?></td>
 <td>

 <a href="delete.php?id=<?php echo $row['NPSN'] ?>" onclick="return
confirm('Apakah anda yakin?')">Delete</a>
 <a href="edit.php?id=<?php echo $row['NPSN']; ?>">Update</a>
 </td>
 </tr>
 <?php
 }
?>
</table> 
</body>
</html>
