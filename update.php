<?php
include("connection.php");
error_reporting(0);
 $_GET['sd'];
 $_GET['sn'];
 $_GET['rg'];
 $_GET['ag'];

?>
<html>
<head>
</head>
<body>
<form action="" method="GET">
Sailor_ID<input type="text" name="sailorid" value="<?php echo$_GET['sd'];?>"/><br><br>
Sailor_Name<input type="text" name="sailorname" value="<?php echo$_GET['sn'];?>"/><br><br>
Rating<input type="text" name="rating" value="<?php echo$_GET['rg'];?>"/><br><br>
Age<input type="text" name="age" value="<?php echo $_GET['ag'];?>"/><br><br>
<input type="submit" name="submit" value="update"/>

</form>
<?php
if($_GET['submit'])
{ 
   $id = $_GET['sailorid'];
   $name = $_GET['sailorname'];
  $rag = $_GET['rating'];
	$ag = $_GET['age'];
	$query="UPDATE sailortab SET SNAME= '$name',RATINGS='$rag',AGE= '$ag' WHERE SID= '$id'";
   $data=mysqli_query($conn,$query);
   if($data)
   {
	 echo"<font color='red'>Record updated. <a href='display.php'>click her to display updated database</a>";
   }
   else
   {
	echo"<font color='red'>Record not updated";
   }	
   
 
}
else{
	echo"<font color='green'>click on update";
	
}
?>
</body>
</html>
