<?php
require('connect.php');
if((isset($_POST['ai']) && $artificial_intelligence = 2 ) || (isset($_POST['ai_tf']) && $artificial_intelligence = 1 ) || $artificial_intelligence = 0);
if((isset($_POST['os']) && $operating_system = 2) || (isset($_POST['os']) && $operating_system = 1) || $operating_system = 0);
if((isset($_POST['gt']) && $graph_theory = 2) || (isset($_POST['gt']) && $graph_theory = 1) || $graph_theory = 0);
if((isset($_POST['cd']) && $compiler_design = 2) || (isset($_POST['cd']) && $compiler_design = 1) || $compiler_design = 0);
if((isset($_POST['pom']) && $po_management = 2) || (isset($_POST['pom']) && $po_management = 1) || $po_management = 0);
if((isset($_POST['net_c']) && $net = 2) || (isset($_POST['net_c']) && $net = 1) || $net = 0);
$date = date("Y-m-d");
$sql = "INSERT INTO `attendance` (`ai`,`os`,`gt`,`cd`,`pom`,`c#`,`date`) VALUES('$artificial_intelligence','$operating_system','$graph_theory','$compiler_design','$po_management','$net','$date') ";
if($date && mysqli_query($conn, $sql)){
	echo 'Success';
}
else{
	echo 'Error';
	echo mysqli_error($conn);
}
mysqli_close($conn);