<?php
	require_once('config.php');
	$sql="SELECT user_name,email_id,address,pin from tblusers where mobile_no='9206255947'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$user_detail=array('name' => $row['user_name'], 'email' => $row['email_id'], 'address' => $row['address'], 'pin' => $row['pin']);			
		}
	}
	$webUserDetail = json_encode($user_detail);

	echo $webUserDetail;
	
	//echo $result;

?>