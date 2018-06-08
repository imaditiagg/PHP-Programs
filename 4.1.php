<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'my_db')or die("could not select");
if($con && $db)
echo "Connected to database";

?>