<html>
<head>
<title>Pagina 1 form</title>
</head>
<body>

<div>This is our upload control</div>

<form name="form"  method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <p>
    <input type="submit" name="submit" value="Submit">
 </form>

<br>
 

</body>
</html>

<?php

if(isset($_POST['submit']))
{
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	{
		echo "Failed";
	}
	else
	{
		$name=addslashes($_FILES['image']['name']);
		$image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
		saveimage($name,$image);
	}
}

function saveimage($name,$image)
{
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'image_db')or die("could not select");

if($con && $db)
echo "Connected to database";


$query= mysqli_query($con,"INSERT INTO my_table(name,image)  VALUES  ('$name','$image')");
	 if($query)
	 	echo "success";
	 else
	 	echo "not uploaded";

}

display();

function display()
{
$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'image_db')or die("could not select");

if($con && $db)
echo "Connected to database";

$sql="select * from my_table";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);

for($i=0;$i < $num; $i++)
{
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	echo '<img src="data:image;base64,'.$img.' " width="20%" height="20%">';
}


}

?>

