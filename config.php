<?php	
   	$dbhost = "localhost:3306";
	$dbuser = "modok_web";   
	$dbpass="Web@2019"; 
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"modokaa_user_address");
	
   	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}
	/*else
	{
		echo "Successful ";
		return $conn;
	}*/

	
	?>