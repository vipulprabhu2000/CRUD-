<?php
include("connection.php");
error_reporting(0);
?>

<?php
		    echo"<center><h1>Sailor Database</h1></center>";
			echo"<center><a href='search.php'><h2>Search and Display</h2></a></center>";
?>

<html>
<head>
</head>
<body>
<center>
<form action="" method="GET">
Sailor_ID<input type="text" name="sailorid" value=""/><br><br>
Sailor_Name<input type="text" name="sailorname" value=""/><br><br>
Rating<input type="text" name="rating" value=""/><br><br>
Age<input type="text" name="age" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>

</form>
<?php
if($_GET['submit'])
{
	 $sid=$_GET['sailorid'];
  $sname=$_GET['sailorname'];
  $ratg=$_GET['rating'];
  $ag=$_GET['age'];
	
	if($sid!=""&&$sname!=""&&$ratg!=""&&$ag!="")
	{
		$query="INSERT INTO sailortab VALUES('$sid','$sname','$ratg','$ag')";
         $data=mysqli_query($conn,$query);
       
	         if($data)
            {
	           echo"Data inserted in the Database.";
             }
  
	}
	else
	{
		echo"Fill all the Fields";
	}
}

 echo"<a href='display.php'>click here to display</a>";



 
  


?>
</center>
</body>
</html>
