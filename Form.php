<!DOCTYPE html>
<html>
<head>

<center><h1 style="font-family:Georgia">FORM</h1></center>

</head>
<body bgcolor="#ffd9b3" style="font-family:Georgia">
<p>Mandatory Fields 
<font color="red">*</font></p>
<br>
<form method="post" name="my_form" action="processform.php">
 <fieldset>
 <legend align="center" >Personal information</legend>
 First name
<font color="red">*</font>
<br>
  
<input type="text" id="1" name="firstname" required>
  
<br>
  
Last name<br>
  
<input type="text" id="2" name="lastname">
  
<br>
  
Roll no
<font color="red">*</font>
<br>
<input type="number" id="3" name="roll" max="70" min="1"  required>
<br>
Gender
<br>
<input type="radio" name="gender" value="male" checked> Male
 
 <input type="radio" name="gender" value="female"> Female
  
<br>
  
Father's name
<font color="red">*</font>
<br>
  
<input type="text" name="fname" required>
 
 <br>
  
Mother's name
<font color="red">*</font>
<br>
 
 <input type="text" name="mname" required>
 
 <br>

  Contact No.<br>
 
 <input type="tel" name="usrcon" maxlength="12">
 
 <br>
  
DOB
<font color="red">*</font>
<br>
 
 <input type="date" name="dob" required>
 
 <br>
 
 E-mail
<font color="red">*</font>
<br>
 
 <input type="email" name="email" required>
  
</fieldset>
 
 <br>
 <br>
Upload photo
<br>
 <input type="file" name="pic" accept="image/jpeg,image/png,image/bmp">
 <br><br>

 <fieldset>
  

<legend align="center">Academic information</legend>

  Year of passing 10<sup>th</sup><br>
  
<select name="year1">
 
 <option value="2010">2010</option>

  <option value="2011">2011</option>
 
 <option value="2012">2012</option>
 
 <option value="2013">2013</option>
  
</select>
  
<br>
  
Percentage in 10<sup>th</sup><br>
  
<input type="number" name="percent1" min="60" max="100">
 
 <br>
 
 Year of passing 12<sup>th</sup><br>
 
 <select name="year2">

  <option value="2012">2012</option>
  
<option value="2013">2013</option>
 
 <option value="2014">2014</option>
 
 <option value="2015">2015</option>
 
 </select>
  
<br>

  Percentage in 12<sup>th</sup><br>
 
 <input type="number" name="percent2" min="60" max="100">
 
 <br>
 
 Preferred subjects<br>
 
 <input type="checkbox" name="sub" value="English" checked>English
  
<input type="checkbox" name="sub" value="Hindi">Hindi
 
 <input type="checkbox" name="sub" value="Mathematics">Mathematics
 
 <input type="checkbox" name="sub" value="Physics">Physics

  <input type="checkbox" name="sub" value="Chemistry">Chemistry
 
 <input type="checkbox" name="sub" value="Accounts">Accounts

  <input type="checkbox" name="sub" value="Economis">Economics
 
 <input type="checkbox" name="sub" value="Biology">Biology
 
 <input type="checkbox" name="sub" value="History">History
  
<input type="checkbox" name="sub" value="PolSc">Polsc
 
 </fieldset>
<br>
 
<input type="checkbox" name="agr" value="agree" required>I hereby confirm that the information provided above by me is correct.
  <font color="red">*</font>


<br>
 <center><input type="submit" name="submit" value="submit"></center>

</form>
</font>
</body>



</html>
