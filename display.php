<style>
td
{
	padding:10px;
}

</style>


<?php
include("connection.php");
error_reporting(0);
$query="SELECT *from sailortab";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);





if($total!=0)
{    
    ?>
	
	<table>
	    <tr>
		   <td>SAILOR_ID</td>
		   <td>SAILOR_NAME</td>
		   <td>RATINGS</td>
		   <td>AGE</td>
		   <td COLSPAN=2>OPERATIONS</td>
		  
		   
		 </tr>
		   
	
	<?php
	  
	
      while($result=mysqli_fetch_assoc($data))
	  {  
          echo"<tr>
		   <td>".$result['SID']."</td>
		   <td>".$result['SNAME']."</td>
		   <td>".$result['RATINGS']."</td>
		   <td>".$result['AGE']."</td>
		   <td><a href='update.php?sd=$result[SID]&sn=$result[SNAME]&rg=$result[RATINGS]&ag=$result[AGE]'>EDIT</a></td>
		   <td><a href='delete.php?sd=$result[SID]' onclick='return checkdelete()'>DELETE</a></td>
		 </tr>";
		  
	  }

	  
	  
	  
	  
	  
	  
	  
	  
}
else
{
	echo"empty table";
	
}



?>

</table>
<script>


function checkdelete()
{
	return confirm('are you sure to delete the data??');
}
</script>
