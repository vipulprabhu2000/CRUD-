<?php
 include("connection.php");
 error_reporting(0);
 $idd=$_GET['sd'];

$query="delete from sailortab where SID='$idd'";

 $data = mysqli_query($conn,$query);
 if($data)
 {
	 echo"<script>alert('Record Deleted')</script>";
	 ?>
     <META HTTP-EQUIV="refresh" Content="0; URL=http://localhost/databaseproject/display.php">
	 <?php
	 
 }
 else
 {
	 echo"<font color='red'>record deletion unsuccessfull";
 }
 ?>