<?php
	require_once('config.php');
	$sql1="SELECT COUNT(*) AS 'ROWS' FROM `tbldelivery` WHERE PIN=".$_POST['pincode'];
	
	$resultPin = $conn->query($sql1);
	
	if($resultPin){
		
		if ($resultPin->num_rows > 0) {
			while($rowPin = $resultPin->fetch_assoc()) {
				$delivery_detail=array('count' => $rowPin['ROWS']);			
			}
		}
		else
		{
			
			$delivery_detail=array('count' => 0);			
		}
	}
	else
	{
			$delivery_detail=array('count' => -1);			
	}
	
	$deliveryDetail = json_encode($delivery_detail);
	echo $deliveryDetail;
	
?>