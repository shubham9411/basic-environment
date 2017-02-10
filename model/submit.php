<?php
require('connect.php');
if(isset($_POST['memo'])):
	$val = $_POST['memo'];
	$val = htmlentities($val,ENT_QUOTES);
	$sql = "INSERT INTO `meta` (`value`) VALUES('$val') ";
	if($val && mysqli_query($conn, $sql)){
		echo 'Success';
	}
	else{
		echo 'Error';
		echo mysqli_error($conn);
	}
	mysqli_close($conn);
endif;
if(isset($_POST['task'])):
	$val = 'H '.$_POST['hour'];
	$val = $val . ' M '.$_POST['minute'];
	$val = $val . ' S '.$_POST['second'];
	$val = $val . ' M '.$_POST['microsecond'];
	$val = htmlentities($val,ENT_QUOTES);
	$task = htmlentities($_POST['task']);
	$sql = "INSERT INTO `timer` (`timer_val`,`task`) VALUES('$val','$task') ";
	if($val && $task && mysqli_query($conn, $sql)){
		echo 'Success';
	}
	else{
		echo 'Error';
		echo mysqli_error($conn);
	}
	mysqli_close($conn);
endif;