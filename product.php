<?php
	include '../db.php';
	$user=$_POST['id'];
	$user=$_POST['name'];
	$user=$_POST['desc'];
	$user=$_POST['price'];
	$user=$_POST['weight'];
	$user=$_POST['procode'];
	
	$response=array();
	
	$data=mysqli_query($con, " ('".$id."','".$name."','".$desc."','".$price."','".$weight."','".$procode."')");
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