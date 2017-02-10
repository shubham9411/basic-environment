<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/attendance.css">
		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<?php
		require('model/connect.php');
		$date = date("Y-m-d");
		$sql = "SELECT * FROM `attendance` WHERE `date` = '$date'";
		$results = mysqli_query($conn, $sql);
		if(!mysqli_num_rows($results) > 0):
		?>
		<div class="container text-center">
			<form action="model/attendance.php" method="post" accept-charset="utf-8" role="form">
				<div class="form-group">
					<label for="ai">Artificial Intelligence</label>
					<label class="switch">
						<input type="checkbox" id="ai" name="ai">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="ai_tf">
						<div class="slider"></div>
					</label>
				</div>
				<div class="form-group">
					<label for="gt">Graph Theory</label>
					<label class="switch">
						<input type="checkbox" id="gt" name="gt">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="gt_tf">
						<div class="slider"></div>
					</label>
				</div>
				<div class="form-group">
					<label for="os">Operating System</label>
					<label class="switch">
						<input type="checkbox" id="os" name="os">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="os_tf">
						<div class="slider"></div>
					</label>
				</div>
				<div class="form-group">
					<label for="cd">Compiler Design</label>
					<label class="switch">
						<input type="checkbox" id="cd" name="cd">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="cd_tf">
						<div class="slider"></div>
					</label>
				</div>
				<div class="form-group">
					<label for="pom">Principle Of Management</label>
					<label class="switch">
						<input type="checkbox" id="pom" name="pom">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="pom_tf">
						<div class="slider"></div>
					</label>
				</div>
				<div class="form-group">
					<label for="net_c">.NET and C#</label>
					<label class="switch">
						<input type="checkbox" id="net_c" name="net_c">
						<div class="slider round"></div>
					</label>
					<label class="switch">
						<input type="checkbox" name="net_c_tf">
						<div class="slider"></div>
					</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<?php
		else:
		$result = mysqli_fetch_assoc($results);
		function get_status_attendance($status = 0){
			if(0 == $status){
				echo '<p class="no-cls">No Class</p>';
			} else if(1 == $status){
				echo '<p class="not-at">Not attended</p>';
			} else if(2 == $status){
				echo '<p class="attend">Attended</p>';
			} else{
				echo '<p>NO INFO</p>';
				return;
			}
		}
		?>
		<div class="container">
			<div class="well"><h1>Today's Stats</h1></div>
			<table class="table table-responsive">
				<thead>
					<tr>
						<th>Artificial Intelligence</th>
						<th>Graph Theory</th>
						<th>Operating System</th>
						<th>Compiler Design</th>
						<th>POM</th>
						<th>.NET</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td><?php get_status_attendance(intval($result['ai']));?></td>
						<td><?php get_status_attendance($result['gt']);?></td>
						<td><?php get_status_attendance($result['os']);?></td>
						<td><?php get_status_attendance($result['cd']);?></td>
						<td><?php get_status_attendance($result['pom']);?></td>
						<td><?php get_status_attendance($result['c#']);?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php
		endif;
		?>
	</body>
</html>