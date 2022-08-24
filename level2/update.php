<?php
	$con = mysqli_connect("localhost","root","","student");

//	mysqli_select_db($con,"student");
	
	$sql = "UPDATE persons SET Age = 22 WHERE FirstName = 'paras'";
	
	mysqli_query($con,$sql) OR die(mysqli_error($con));
			// echo "<pre>";
			// var_dump(mysqli_affected_rows($con));
			// echo "</pre>";
	/*
	Note:
	mysqli_query() 

	will always returns a MySQLi result resource if the query was successful. A resource will always evaluate to TRUE when tested as a boolean.Queries are considered to have failed when there is an error, for example a syntax error or a processing error within the MySQL server - which case they will return FALSE.

	So to chek weather query affects any raw or not can be checked by  function
	mysqli_affected_rows($connection_name) --->Return the number of affected rows from different queries:
	*/

	if(mysqli_affected_rows($con) > 0){
		echo "<b>successfully updated</b>";
	}else{
		echo "<b>Nothing found to updated</b>";
	}

?> 