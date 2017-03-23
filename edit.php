<html>
<head>
	<title>Validasi Form</title>
	<head>
	<body>
		<script language="JavaScript">
		function validasi(){
			var str, error;
			str = "";
			error = 0;
			if(document.getElementById("NPSN").value.length <= 0){
				str += "- Nama tidak boleh kosong.\n";
				error++;
			}
			if(document.getElementById("NAMA_SD").value.length <= 0){
				str += "- Nama SD tidak boleh kosong.\n";
				error++;
			}
			if(document.getElementById("KELURAHAN").value.length <= 0){
				str += "- KELURANAH tidak boleh kosong.\n";
				error++;
			}
			if(document.getElementById("KECAMATAN").value.length <= 0){
				str += "- KECAMATAN tidak boleh kosong.\n";
				error++;
			}
			if(document.getElementById("KABUPATEN").value.length <= 0){
				str += "- KABUPATEN tidak boleh kosong.\n";
				error++;
			}
			if(error > 0){
				alert("Terdapat kesalahan : \n" + str);
				return false;
			} else {
				return true;
			}
		}
		</script>
<h2>Form Sekolah Dasar</h2>
<form action="simpan.php" method="post" onSubmit="return validasi()">
NPSN : <br><input type="text" name="NPSN" id="NPSN" /></br>
<br />
NAMA_SD : <br><input type="text" name="NAMA_SD" id="NAMA_SD" />
<br />
KELURAHAN : <br><textarea name="KELURAHAN" id="KELURAHAN"></textarea>
<br />
KECAMATAN : <br><textarea name="KECAMATAN" id="KECAMATAN"></textarea>
<br />
KABUPATEN : <br><textarea name="KABUPATEN" id="KABUPATEN"></textarea>
<br />
<input type="submit" value="Submit" />
</form>
</body>
</html>