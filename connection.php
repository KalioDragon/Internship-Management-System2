<?php

	$con = mysqli_connect("localhost","root","","mydatabase"); 

	
	if(mysqli_connect_errno())
	{
		echo "Error Occured while connecting with database".mysqli_connect_errno();
	}
	else
	{
		echo"Connection Established";
	}


?>