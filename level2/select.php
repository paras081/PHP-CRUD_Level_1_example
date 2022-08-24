<html>
	 <body>
	 
	 	<table border="2" align="center">
	    
	         <tr>
	        	<th>ID</th>
				<th>Firstname</th>
				<th>Last name</th>
				<th>Age</th>			
	        </tr>

		<?php
			$con = mysqli_connect("localhost","root","");
			mysqli_select_db($con,"student");
			$sql="select * from persons";
			$rs=mysqli_query($con,$sql);

			while($row=mysqli_fetch_array($rs))
			{

		?>
		        <tr>
		        	<td> <?php echo $row['id']; ?>  </td>  
					<td> <?php echo $row['FirstName']; ?> </td> 
					<td> <?php echo $row['LastName']; ?> </td>
					<td> <?php echo $row['Age']; ?> </td>
		        </tr>
		        
		 <?php 
			}
		 ?>

	 	</table>
	 </body>
</html>