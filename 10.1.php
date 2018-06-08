<!DOCTYPE html>
<head>
	<style>
	
    h2{color:white; font-family:Garamond }
    input[type=submit],input[type=reset] {
    color: black;
    font-size: 20px;
    font-weight: bold;
}
</style>
	</head>
	<body>
		<div style="font-size: 20px">
		<div style="background-color: #47d147;color:white;align-content: center;text-align: center">
			<h2> Registration Form </h2>
		</div>
	<form  action = "10.1.php" method="post" name="my_form">
	    Name * <br><input type="text" size="50" class="name" name="name" required>
	    <br><br>
		Date of Birth * <br><input type="date" size="50" name="DOB" required>
		<br><br>
		Enrollment No. * <br><input type="Number" size="50" name="rollno" required>
		<br><br>
		Email *<br><input type="email" size="50" name="email" required>
		<br><br>
		Security Question * <br>
		<select name="ques">
			<option value=" "> Select any </option>
  <option value="color">What is your favorite color ? </option>
  <option value="pet">What is your pet name ?</option>
  <option value="nick">What is your nick name ?</option>
  
  </select>
  <br><br>
  Answer * <br>
  <input type="text" name="ans" minlength="5" maxlength="15" size="50">
  <br><br>
  Password * <br>
  <input type="password" name="password" minlength="5" maxlength="15" size="50">
  <br><br>
  Confirm Password * <br>
  <input type="password" name="confirm_password" minlength="5" maxlength="15" size="50">
		 <br><br><br><input type="submit" name="submit" value="Submit">
		&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<input type="reset" name="reset" value="Reset">

	</form>
	<br>
	Now fill the application form <a href="10.3.php">Click Here</a>
	</div>

	</body>
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
		$DOB=$_POST['DOB'];
		$enrollment_no =$_POST['rollno'];
		$email=$_POST['email'];
		$question=$_POST['ques'];
		$answer=$_POST['ans'];
		$password=$_POST['password'];

		$sql =" INSERT INTO  registration VALUES ('$name','$DOB','$enrollment_no','$email',
			'$question','$answer','$password')";
    $conn->exec($sql);
    echo "alert('record created successfully')";
    }
}
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>