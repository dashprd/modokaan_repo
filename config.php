<?php	
   	$dbhost = "localhost:3306";
	//$dbuser = "modok_mysql";   
	//$dbpass="Nigamaforme@2019"; 
	
	$dbuser = "root";   
	$dbpass=""; 
	
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"modokaa_mysql");
	$conn->query('SET NAMES utf8');

   	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}
	/*else
	{
		mysqli_set_charset($link, 'utf8');
	}*/

	
	?>