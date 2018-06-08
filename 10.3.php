
<!DOCTYPE html>
<html>
<head>

<center><div style="background-color: #47d147;color:white;align-content: center;text-align: center">
			<h2> Application Form </h2>
		</div></center>

</head>
<body style="font-family:Georgia">
<p>Mandatory Fields 
<font color="red">*</font></p>
<br>
<form method="post" name="form" action="10.3.php" enctype="multipart/form-data">
 <fieldset>
 <legend align="center" >General information</legend>
 Name
<font color="red">*</font>
<br>
<input type="text" id="1" name="name" size="40"required>
<br>

  Contact No.
 <font color="red">*</font><br>
 <input type="tel" name="usrcon" maxlength="12" required>
 <br>

 Enrollment No.
 <font color="red">*</font><br>
 <input type="Number" name="rollno" maxlength="12" required>
 

 <br>
 Programme name
<font color="red">*</font>
<br>
  
<input type="text" id="2" name="pname" size="40" required>
<br>
Semester
<font color="red">*</font>
<br>
  
<input type="text" id="3" name="sem" size="40" required>
  
<br>
  

Gender
<br>
<input type="radio" name="gender" value="male" checked> Male
 
 <input type="radio" name="gender" value="female"> Female
  
<br>
 Address
<font color="red">*</font>
<br>
<input type="text" id="5" name="address" max="70" min="1"  size="40" required>
<br>
City
<font color="red">*</font>
<br>
<input type="text" id="6" name="city" max="70" min="1" size="40" required>
<br>
State
<font color="red">*</font>
<br>
<input type="text" id="7" name="state" max="70" min="1"  size="40" required>
<br>

Country
<font color="red">*</font>
<br>
<input type="text" id="" name="country" max="70" min="1" size="40" required>
<br>
Pin Code
<font color="red">*</font>
<br>
<input type="text" id="" name="pincode" max="70" min="1"  size="40" required>
<br>

 
  

  
</fieldset>
 
 <br>
Upload photo
<br>
 <input type="file" name="photo" accept="image/jpeg,image/png,image/bmp" required>
 <br><br>
 Upload Signature
 <br>
 <input type="file" name="sign" accept="image/jpeg,image/png,image/bmp" required>
 <br><br>
 <fieldset>
  



 
 <br>
  
<input type="checkbox" name="agr" value="agree" required>I hereby confirm that the information provided above by me is correct.
  
<center><button onclick="Confrm()">Confirm</button></center>

<br>
 <center><input type="submit" name="submit" value="Submit"></center>

</form>
</font>
</body>


<script>
	function Confrm()
	{
		var q=/^[a-zA-Z]+$/; //alphabetical string
		var x=document.getElementById("1").value; //x contains firstname
		var y=document.getElementById("2").value; //y contains lastname
		var z=document.getElementById("3").value; //z contains rollNo.
		var p=z.toString();
		if(!x.match(q))
		{
			
			alert("Name should be an alphabetical string...");
		}
		if(isNaN(p))   //check for numeric value
		{
			alert("Roll no should be 7 digit numerical value...");
		}
		if(!(isNaN(p)))
		{
			if(z.length!=7)
			{
				alert("Roll no should be of 7 digit...");
			}
		}
	}
</script>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
try {
	try{
    $conn = new PDO("mysql:host=$servername;dbname=10thDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
 catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$contact=$_POST['usrcon'];
		$rollno=$_POST['rollno'];
		$pname=$_POST['pname'];
		$sem=$_POST['sem'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];
		$country=$_POST['country'];

 $file_name1=$_FILES["photo"]["name"];
$imagename1=$_FILES["photo"]["tmp_name"];
$target_path1 = "documents/".$file_name1;
$file_name2=$_FILES["sign"]["name"];
$imagename2=$_FILES["sign"]["tmp_name"];
$target_path2 = "documents/".$file_name2;
if(move_uploaded_file($imagename1, $target_path1) && move_uploaded_file($imagename2, $target_path2))
{
	$query = " INSERT INTO application VALUES ('$name','$contact','$rollno','$pname','$sem','$gender','$address','$city','$state','$country','$pincode','$target_path1','$target_path2')";
	 $conn->exec($query);
 echo "alert('Succesfully inserted')";
}
}
}
catch(PDOException $e)
    {
    echo $query . "<br>" . $e->getMessage();
    }
    $conn = null;
    ?>

