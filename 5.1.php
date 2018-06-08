<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'data1')or die("could not select");

$query ="select * from table1"; //table 1 is present my data1 database
if($is_query_run=mysqli_query($con,$query))
{
	echo "Query executed<br>";
	echo "<br> Names in the database are: ";
	while($query_execute=mysqli_fetch_assoc($is_query_run)) //associate array
	{
		echo '<br> '.$query_execute['name'];
	}
}
else 
	echo "Error";



?>