<!DOCTYPE html>
<html>
<head>
	</head>

<body>
	<form method=post action="1.2(c).php">
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

echo "<br><br>";
echo "CamilCase display of string is: <br>";
echo ucwords($string);
}

?>