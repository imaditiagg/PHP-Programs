<html>
<head>
<title>Pagina 1 form</title>
</head>
<body>

<div>This is our upload control</div>

<form name="form"  method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <p>
    <input type="submit" name="submit" value="Submit">
 </form>

<br>
 <!--<img src="5.php"?id="48"> -->

</body>
</html>
<?php 
if(isset($_POST['submit']))
{

$con=mysqli_connect("localhost","root","") or die("unable to connect");
$db=mysqli_select_db($con,'image_db')or die("could not select");

if($con && $db)
echo "Connected to database";
 
$image_name =mysqli_real_escape_string( $con,$_FILES['photo']['name']);
echo $image_name;

$image_data = mysqli_real_escape_string($con,file_get_contents($_FILES['photo']['tmp_name']));
$temp_name  =$_FILES['photo']['tmp_name'];

echo "<br>$temp_name";
$image_type=mysqli_real_escape_string($con,$_FILES['photo']['type']);
$target_path="documents/".$image_name;
echo "<br> $target_path";

if(substr($image_type,0,5) == "image" && move_uploaded_file($temp_name, $target_path))
{
	 $insert_image= mysqli_query($con,"INSERT INTO my_table(name,image)  VALUES  ('$image_name','$image_data')");
	 if($insert_image)
	 echo "<br>Image uploaded";
}

else
echo "<br>only images are allowed";
echo "<br>";
echo "<img src='documents/$image_name' width='30%' height='30%' >";

}
?>
