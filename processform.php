<?php 
	if(isset($_POST['submit']))
	{
		 $fname= $_POST['firstname'];
         $lname=$_POST['lastname'];
		 $rollno=$_POST['roll'];
	     $gen=$_POST['gender'];
	     $e=$_POST['email'];
	     $no=$_POST['usrcon'];
	     $date=$_POST['dob'];
	     $y1=$_POST['year1'];
	     $p1=$_POST['percent1'];
	     $y2=$_POST['year2'];
	     $p2=$_POST['percent2'];
         
        $con=mysqli_connect("localhost","root","") or die("unable to connect");
        $db=mysqli_select_db($con,'data1')or die("could not select");
        if($con && $db)
        echo "Connected to database";

       /* $sql = "CREATE TABLE Register (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30),
        RollNo INT(10),
        gender VARCHAR(20),
        email VARCHAR(50),
        contactNo INT(10),
        DOB TIMESTAMP,
        year10 INT(10),
        percent10 INT(10),
        year12 INT(10),
        percent12 INT(10),
)";
if($con->query($sql)==TRUE)
	echo"<br>table created succuessfully";
else
{
	echo "<br>Table not created";
    echo  mysqli_error($con);
}*/

$query="insert into Student(firstname,lastname,RollNo,gender,email,contactNo,DOB,year10,percent10,year12,percent12) values($fname,$lname,
	$rollno,$gen,$e,$no,$date,$y1,$p1,$y2,$p2)";
if(mysqli_query($con,$query))
	{
		echo "<script>alert('Successfully entered data ')</script>";
		
    }

         echo "<br>";
         echo 'Welcome '.$fname." ".$lname;
		 echo "<br> Your Roll  no. is $rollno";
		 echo"<br> Gender: $gen";
		 echo"<br>Contact no. : $no";
		 echo"<br>DOB : $date";
		 echo "<br> Email id : $e";
		 echo"<br>Year of passing 10th: $y1";
		 echo"<br>Percentage in 10th: $p1";
		 echo"<br>Year of passing 12th: $y2";
		 echo"<br>Percentage in 12th: $p2";
		 echo "<br> ThankYou";
	}
?>	
  