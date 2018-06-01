<?php
	$con = mysqli_connect("localhost","root","","webmail2") or
		die("Error".mysqli_connect_error());

	$ntf_id = $_GET['ntf_id'];
	$query = "delete from user_message where id =".$ntf_id;
	mysqli_query($con,$query);
	echo mysqli_error($con);
	header("location:notifications.php");

?>