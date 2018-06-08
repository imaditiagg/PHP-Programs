<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'my_db')or die("could not select");
if($con && $db)
echo "Connected to database";

$sql = "CREATE TABLE Emp (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

/*if($con->query($sql)==TRUE)
	echo"<br>table created succuessfully";
else
	echo "<br>Table not created";
*/
$query="insert into Emp(firstname,lastname,email,reg_date) values('akanksha','jain','akku2@gamil.com','2018-07-09')";
if(mysqli_query($con,$query))
	{
		echo "<script>alert('Successfully entered data ')</script>";
		
    }

?>