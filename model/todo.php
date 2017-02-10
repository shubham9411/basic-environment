<?php
if($_POST['action']):
	do_action($_POST['action']);
endif;
function do_action($action){
	if($action=='tasks_load'){
		tasks_load();
	}
	else{
		return;
	}
}
function tasks_load(){
	require('connect.php');
	$sql = "SELECT * from `to_do`";
	$result = mysqli_query($conn, $sql);
	$i =0;
	if($result){
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$status='';
				if($row['status']==1) $status="checked";
				if($row['status']!=2)
				$tasks[$i++] = array('id' => $i, 'status' => $row['status'], 'value' => $row['value']);
			}
		} else {
			echo "<li> No Tasks</li>";
		}
	}
	else{
		echo 'Error';
		echo mysqli_error($conn);
	}
	$tasks = json_encode($tasks);
	return ($tasks);
	mysqli_close($conn);
}
function tasks_push(){
	require('connect.php');
}