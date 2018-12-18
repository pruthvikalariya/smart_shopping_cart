<?php
	include '../db.php';
	$date=date("Y-m-d");
	$response=array();
	
	$data=mysqli_query($con, "SELECT * FROM `offer_master` WHERE om_start<='".$date."' and om_end>='".$date."')");
	if(mysqli_num_rows($data)!=0)
	{
		$response['success']=201;
		$row=mysqli_fetch_array($data);
		$response['data']=$row;
		$response['message']="Login Successfull";
	}
	else
	{
		$response['success']=200;
		$response['message']="UserID or Password Incorrect";
	}
	echo json_encode($response);
?>