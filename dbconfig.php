<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die("Could Not Connect".mysqli_error());
	}
	mysqli_select_db($con,"excellence");


	
?>