<?php
	include '../db.php';
	$name=$_POST['name'];
	$cnct=$_POST['cnct'];
	$email=$_POST['mail'];
	$psw=md5($_POST['psw']);
	$add=$_POST['add'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$doa=$_POST['doa'];
	$response=array();
	
	$data=mysqli_query($con, "INSERT INTO `user_master`(`um_name`, `um_cnct`, `um_mail`, `um_psw`, `um_add`, `um_city`, `um_gender`, `um_dob`, `um_doa`) VALUES('".$name."','".$cnct."','".$email."','".$psw."','".$add."','".$city."','".$gender."','".$dob."','".$doa."')");
	if(mysqli_num_rows($data)!=0)
	{
		$response['success']=201;
		$response['message']="Login Successfull";
	}
	else
	{
		$response['success']=200;
		$response['message']="UserID or Password Incorrect";
	}
	echo json_encode($response);
?>