
<?php

$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'image_db')or die("could not select");

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$query=mysqli_query("SELECT * from my_table where 'id'='$id'");
	while($row=mysqli_fetch_assoc($query))
	{
		$imageData =$row["image"];
	}
	header("content-type: image/jpeg");
	echo $imageData;
}




?>
 



















 