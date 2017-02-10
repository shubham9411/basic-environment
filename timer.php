<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Stopwatch</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<?php
		if(!empty($_POST['task'])):
		?>
		<div class="row-fluid gap-top">
			<div class="col-xs-3 size text-center"><h1 id="hour">00</h1><h4>Hour</h4></div>
			<div class="col-xs-3 size text-center"><h1 id="minute">00</h1><h4>Minutes</h4></div>
			<div class="col-xs-3 size text-center"><h1 id="second">00</h1><h4>Seconds</h4></div>
			<div class="col-xs-3 size text-center"><h1 id="microsecond">00</h1><h4>MS</h4></div>
			<div class="col-xs-12 gap">
				<form action="" class="form text-center gap-top" id="timer-form" method="POST" accept-charset="utf-8">
					<input id="task_sub" type="hidden" value="<?php echo $_POST['task'];?>">
					<button type="button" id="timer-submit" class="btn btn-info">Submit</button>
				</form>
			</div>
			<?php else: ?>
			<div class="container well">
				<form action="" method="post" class="form-inline text-center" id="task-form" accept-charset="utf-8" role="form">
					<div class="form-group task">
						<label for="task" class="sr-only">Task: </label>
						<input class="form-control" type="text" name="task" id="task" placeholder="Task Name" required="required">
					</div>
					<input type="hidden" name="start" value="0">
					<button type="button" class="btn btn-danger" id="submit-task">Start</button>
				</form>
			</div>
		</div>
		<?php endif; ?>
		<script src="js/timer.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>