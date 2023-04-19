<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$date = $_POST['date'];
		$deparment = $_POST['department'];
		$subject = $_POST['subject'];
		$forwarded_to = $_POST['forwarded_to'];
		$action_taken_by= $_POST['action_taken_by'];
		$dispatched_to = $_POST['dispatched_to']."".$_POST['section'];
		$password = md5($_POST['password']);
		
		mysqli_query($conn, "UPDATE `logs` SET `date` = '$date', `department` = '$department', `subject` = '$subject', `fowarded_to` = '$fowarded_to', `action_taken_by` = '$action_taken_by', `password` = '$password' WHERE `file_id` = '$file_id'") or die(mysqli_error());
		
		echo "<script>alert('Successfully updated!')</script>";
		echo "<script>window.location = 'logs.php'</script>";
	}
?>