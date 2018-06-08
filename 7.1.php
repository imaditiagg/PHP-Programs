<!DOCTYPE html>
<head>
	<style>
	div{
		text-align: center;
		color:grey;
	}
    h2{color:black; font-family:Garamond }
    input[type=submit] {
   
    background-color: #ff8533;
    color: black;
    font-size: 20px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 15px;
    cursor: pointer;
}
</style>
	</head>
	<body>
		<div>
		<h2>Contact me</h2>
		<h3>Web Form powered by Batchbook</h3>
	<form  action = "7.1.php" method="post">
		First Name * <input type="text" size="50" class="name" name="fname" required>
		<br><br>
		Last Name &#160;&#160; <input type="text" size="50" name="lname" required>
		<br><br>
		Email &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="email" size="50" name="email"required>
		<br><br>
		Website &#160;&#160;&#160;&#160;&#160;&#160;&#160; <input type="url" size="50" name="web" required>
		<br><br>
		Phone &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="tel" size="50" name="phone" required>
		<br><br>
		Your message &#160; <textarea rows="9"  cols="50"></textarea>
		<br><input type="submit" name="submit" value="submit">

	</form>
	</div>

	</body>
	</html>


<?php
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'my_db')or die("could not select");
if($con && $db)
echo "Connected to database";

if (isset($_POST['submit']))
{
	
$f=$_POST['fname'];
$l=$_POST['lname'];
$m=$_POST['email'];
$w=$_POST['web'];
$p=$_POST['phone'];

$query="INSERT INTO contact(fname,lname,email,web,phone) values('$f','$l','$m','$w','$p')";
 if (mysqli_query($con,$query))
 	echo "<script>alert('Successfully registered')</script>";
 else echo "Unable to insert ".mysqli_error($con);

}
?>
