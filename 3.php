<?php 
	if(isset($_POST['submit']))
	{
		 $name= $_POST['realname'];
		 $c = $_POST['con']; 
		 $e=$_POST['emailid'];
	
		 echo 'Welcome '.$name;
		 echo "<br> Your contact no. is $c";
		 echo "<br> Your email id is $e";
		 echo "<br> ThankYou";
	}
?>	
  