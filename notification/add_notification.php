<?php
	$con = mysqli_connect("localhost","root","","webmail2") or
		die("Error".mysqli_connect_error());
	date_default_timezone_set('Australia/Melbourne');
	$ntf_time = strtotime($_POST['ntf_time']);
	

	$ntf_msg = $_POST['ntf_msg'];
	$ntf_type = $_POST['msg_type'];
	$query = "insert into user_message (milisecond,message,msg_type,user_id,msg_status,active_status) values ('".$ntf_time."','".$ntf_msg."','".$ntf_type."',1,0,0)";
	mysqli_query($con,$query);
	echo mysqli_error($con);
	header("location:notifications.php");

?>