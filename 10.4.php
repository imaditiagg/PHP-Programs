<!DOCTYPE html>
<html>
<head>

<center><div style="font-family:Georgia;background-color: #47d147;color:white;align-content: center;text-align: center">
			<h2> Welcome </h2></center>
			<a href="10.2.php" style= "background-color: #ff853; color: black;
                                       font-size: 20px;
                                       padding: 14px 20px;
                                       margin: 8px 0;
                                       border: none;
                                       border-radius: 15px;
                                       cursor: pointer; float: right;"> Logout </a>
		</div>
		

</head>

<?php
session_start();
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
    
    if(isset($_POST['Login']))
    {

     $query = " SELECT * FROM registration WHERE enrollment_no=:name AND password=:password ";
     $statement = $conn->prepare($query);  
     $statement->execute(  
                     array(  
                          'name'     =>     $_POST["name"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
   $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["name"];  
                     echo "login success";
                } 
 else {
  $message = "Username/Password is wrong";
  echo "$message";
}
    
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>