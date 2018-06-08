<html>
<body>

<form action="4.3.php" method="post">
<b>Name:</b> <input type="text" name="name">
</br>
<b>Email:</b> <input type="email" name="email">
</br>
<b>UserName:</b> <input type="text" name="u_name">
</br>
<b>Password:</b> <input type="password" name="password">
</br>
<input type="submit" name="submit">

</form>
</body>
</html>


<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'my_db')or die("could not select");

if (isset($_POST['submit']))
{
	$name =$_POST['name']; //save values in these variables
	$email=$_POST['email'];
	$u_name=$_POST['u_name'];
	$password=$_POST['password'];

	

	if($name=='')
	{
		echo "<script>alert('Enter your name')</script>";
	}
	if($email=='')
	{
		echo "<script>alert('Enter your email')</script>";
	}
	if($u_name=='')
	{
		echo "<script>alert('Enter your user name')</script>";
	}
	if($password=='')
	{
		echo "<script>alert('Enter your password')</script>";
	}
	else
	{
		$query="insert into registration(name,email,u_name,password) values('$name','$email','$u_name','$password')";
    }
	if(mysqli_query($con,$query))
	{
		echo "<script>alert('Successfully registered')</script>";
		
    }
}
?>