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

</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','data1');
if(!$con)
{  echo "Error";
   mysqli_connect_error();
}
else { echo "Connection established";}
//$imagename=date("d-m-Y")."-".time().$ext;
if (!empty($_FILES["photo"]["name"])) 
{
 $file_name=$_FILES["photo"]["name"];
$imagename=$_FILES["photo"]["tmp_name"];
$target_path = "documents/".$file_name;

$dataTime = date("Y-m-d H:i:s");
if(move_uploaded_file($imagename, $target_path))
{
$query = "INSERT INTO IMAGE(imageid, imagepath) VALUES('".$dataTime."','".$target_path."')";
mysqli_query($con, $query) or die("error in $query == ----> ".mysqli_error($con));
}
else
{
	exit("Error while uploading the image");
}
}
else echo "Please upload a file";

$query ="select * from IMAGE where imagepath = '$target_path'"; //image is present in my data1 database
if($is_query_run=mysqli_query($con,$query))
{
	echo "Query executed<br>";
	while($query_execute=mysqli_fetch_assoc($is_query_run)) //associate array
	{
		$name = $query_execute['imagepath'];
		echo $name;
		echo "<br>";
echo "<img src='$name' width='30%' height='30%' >";
	}
}
else 
	echo "Error";




?>

