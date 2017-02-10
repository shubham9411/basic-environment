<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/todo.css">
		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div id="myDIV" class="header">
			<h2>My To Do List</h2>
			<input type="text" id="myInput" placeholder="Title...">
			<button class="btn btn-info btn-lg" id="newElement" onclick="todoTask()">Add</button>
		</div>
		<ul id="myUL">
		</ul>
		<script src="js/todo.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>