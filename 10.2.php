
<html>

<head>
  <title> Login Form </title>
  <link rel="stylesheet" href="style.css">
  <style>
  input[type=submit] {
   
    background-color: #47d147;
    color: white;
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
   <div class="title" style="text-align: center;padding :50px 0 20px; background-color: #47d147;color:white">
     <h1 style="text-transform: uppercase;font-size: 36px">Login</h1>
	 </div>
   <div class="container" style="width: 40%; height: 400px;margin: 0 auto;border: 2px; box-shadow: 0 15px 40px">
    <div class="formbox" style="width: 100%;padding: 80px 40px;height: 400px;box-sizing: border-box">
	  <form action = "10.4.php" method="post" name="my_form">
	    <p style="font-weight: bold;color: black ;font-size: 18px">User ID</p>
		<input type="Number" name="name" placeholder="UserID" required>
		 <p style="font-weight: bold;color: black ;font-size: 18px ">Password</p>
		<input type="Password" name="password" placeholder="..........."  required style="width: 100%;margin-bottom: 30px;">
		 &#160;
		<input type="submit" name="Login" value="Login" style="margin-bottom: 30px;"> &#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<a href="#" style="font-size: 18px;font-weight: bold;color: black;">Forget Password</a>
		<center> <b>New Applicants ,</b>
        <a href="10.1.php" style="font-size: 18px;font-weight: bold;color: green;">Register Here </a></center>
        <br><br>
		</form>
		<br><br>
	  </form>
		<br><br>
   </div>   
</body>
</html>


