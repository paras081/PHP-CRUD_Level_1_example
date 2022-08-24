
<html>
	<body>
		<form> 
	    	Search : <input type="text" name="t1" placeholder="Enter FirstName" /> <br/>
	        
	        <input type="submit" name="submit" />
	    </form>
	</body>
</html>


<?php
	$con = mysqli_connect("localhost","root","","student");		

		if(isset($_REQUEST['submit']))
		{
			$t1=$_REQUEST['t1'];
			
			$sql="select * from Persons where FirstName like '$t1'";
			
			$rs=mysqli_query($con,$sql);
			// echo "<pre>";
			// var_dump($rs);
			// echo "</pre>";
			 
				while($row=mysqli_fetch_array($rs))
				{
					//echo "<b>".$row['FirstName']."</b><br/>";
					echo "Search record Found--><b>".$row['FirstName']." ".$row['LastName']." ".$row['Age']."</b><br/>";
				}
				if($rs->num_rows == 0){
					echo "<b>Search record Not Found<b><br/>";
				}
		}	
?>