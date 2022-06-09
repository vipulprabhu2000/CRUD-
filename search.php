<?php
error_reporting(0);
?>
<html>
<body><center>
   <h2>Enter sailorid</h2>
	 
	 <div class="container">
	 <form action="" method="POST">
	 <input type="text" name="sd" class="btn" placeholder="enter sailorid"></input>
	 <input type="submit" name="search" class="btn" value="SEARCH BY ID"/>
	 </form>
	 <table cellspacing="10">
	    <tr>
		  
		   <th>SAILOR_NAME</th>
		   <th>RATINGS</th>
		   <th>AGE</th>
		</tr><br>
		<?php
		   $connection=mysqli_connect("localhost","root","");
		   $db=mysqli_select_db($connection,'sailordatabase1');
		   if(isset($_POST['search']))
		   {
			   $id=$_POST['sd'];
			   $query="SELECT * FROM `sailortab` WHERE SID='$id'";
			   $query_run=mysqli_query($connection,$query);
			   
			   
			   while($row = mysqli_fetch_array($query_run))
			   {
				   ?>
				   <tr>
				     <td> <?php echo $row['SNAME']; ?></td>
					 <td> <?php echo $row['RATINGS']; ?></td>
					 <td> <?php echo $row['AGE']; ?></td>
					 </tr>
				   
				   <?php
			   }
		   }
		   ?>
		

	 </table>
	 <a href="insert.php" color="blue">click here to go to insert page</a>
	 
	 </center>
</body>
</html>
  
