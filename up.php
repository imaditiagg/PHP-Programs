
<html>
    <head>
        <title> Delegate edit form</title>
    </head>
    <body>
          
            <?php
            $con=mysqli_connect('localhost','root','','data');

				if(!$con)
				{
					echo "Error";
					mysqli_connect_error();
				}
					
            $sql    = "SELECT * FROM student WHERE name='rishika'";
            $result = mysqli_query($con,$sql) or die(mysqli_error());
            while ($row    = mysqli_fetch_array($result))
            {

                $rollno = $row['rollno'];
                $name   = $row['name'];
                            }
            ?>
        <form action="update.php" method="post">
            Roll no.
            <input type="text" name= "rollno" value= "<?php echo $row ['rollno']; ?> "size=10>
            Name
            <input type="text" name= "name" value= "<?php echo $row ['name']; ?> "size=10>
            <input type="submit" name= "submit" value="Update">
        </form>
    </body>
</html>