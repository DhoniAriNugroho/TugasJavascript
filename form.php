<html>
<head><title>Form Login Admin</title>
<script type="text/javascript">
  function validasi_input(form){
    if (form.username.value == ""){
      alert("Username masih kosong!");
      form.username.focus();
      return (false);
    }
	if (form.password.value == ""){
      alert("Password masih kosong!");
      form.password.focus();
      return (false);
	}
   return (true);
  }
</script>

<body>
<form action="login.php" method="post" onsubmit="return validasi_input(this)" >
<table>
<tr>
	<td>Username</td>
	<td><input type="text" name="username" size="20"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="password" name="password" size="20"></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input type="submit" name="Login" value="Proses"></td>
</tr>

</table>
</form>
</body>
</html>