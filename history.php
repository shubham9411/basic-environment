<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="container-fluid">
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for data.." columns="5">
			<table class="table table-hover" id="myTable">
				<thead>
					<tr>
						<th>Date</th>
						<th>Values</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require('model/connect.php');
					$dateFormat = 'F j Y, g:i a';
					$sql = "SELECT * from `meta` order by id DESC";
					$result = mysqli_query($conn, $sql);
					function tabbedData($data_){
						$arrlength = count($data_);
						for($x = 0; $x < $arrlength; $x++) {
							echo $data_[$x];
							echo "<br>";
						}
					}
					if($result){
						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								$date = new DateTime($row['created_at']);
								$date = $date->format($dateFormat);
								$data = $row['value'];
								$data = explode('	', $data);
								echo "<tr><td>" . $date. "</td><td><p><pre>" ;
								tabbedData($data);
								echo "</p></pre></td></tr>"."\n";
							}
						} else {
							echo "0 results";
						}
					}
					else{
						echo 'Error';
						echo mysqli_error($conn);
					}
					mysqli_close($conn);
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>