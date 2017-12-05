<!DOCTYPE html>
<html>

<?php
$register_form = _GET['register_form'];
if($register_form=="true")
{
	$link=connect_db();
	$sql="insert into user values('$uname','$pword')";
	$result=mysql_query($sql,$link);
	if($result==null)
		echo "<br> Registration failed.Please try again.<br>";
	else
		echo "<br><br>Welcome<br>";
}

?>
<head>
<title>Contacts</title>
</head>

<body>
<form action="contacts.php" method="GET">
<input type="hidden" name="register_form" value="true">
<table>
<tr>
<td>username:</td><td><input type="text" name="uname" size="15"></td>
</tr>
<tr>
<td>password:</td><td><input type="password" name="pword" size="15"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Register"></td>
</tr>
</table>
</form>
</body>
</html>