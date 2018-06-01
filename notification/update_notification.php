<?php
	$con = mysqli_connect("localhost","root","","webmail2") or
		die("Error".mysqli_connect_error());
	date_default_timezone_set('Australia/Melbourne');
	$ntf_time = strtotime($_POST['ntf_time']);
	$ntf_msg = $_POST['ntf_msg'];	
	$ntf_id = $_POST['ntf_id'];
	$ntf_type = $_POST['ntf_type'];
	$query = "update user_message set milisecond = '".$ntf_time."', message = '".$ntf_msg."', msg_type = '".$ntf_type."' where id = ".$ntf_id;
	mysqli_query($con,$query);
	echo mysqli_error($con);
	header("location:notifications.php");

?>