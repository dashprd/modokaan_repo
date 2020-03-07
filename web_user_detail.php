<?php
	require_once('config.php');
	$sql="SELECT user_name,email_id,billing_address,pin_code from web_user_address where mobile_no='9206255947'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$user_detail=array('name' => $row['user_name'], 'email' => $row['email_id'], 'address' => $row['billing_address'], 'pin' => $row['pin_code']);			
		}
	}
	$webUserDetail = json_encode($user_detail);

	echo $webUserDetail;
	
	//echo $result;

?>