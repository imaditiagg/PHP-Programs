<!DOCTYPE html>
<html>
<head>
	</head>

<body>
	<form method=post action="1.2(b).php">
		<br><br>
		Enter a String:
		<input type="text" name="str">
		<br><br> 
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>



<?php

if(isset($_POST['submit']))
{
$string = $_POST['str'];
if ($string == strrev($string))
	echo"<br><br>Given string is palindrome";
else
	echo"<br><br>Given string is not palindrome";
}
?>