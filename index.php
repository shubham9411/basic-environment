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
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><b>Neki Kar Dariya M Daal</b></div>
				<div class="panel-body">
					<form class="form-horizontal" method="post" accept-charset="utf-8" role="form" id="form">
						<div class="form-group">
							<div class="col-sm-12">
								<textarea type="text" name="memo" class="form-control" id="memo" placeholder="Enter memo" rows="10"></textarea>
							</div>
						</div>
						<div class="alert alert-success fade in" id="memo-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Success!<b style="color: red">❤</b></strong>
						</div>
						<div class="alert alert-danger fade in" id="memo-failure">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>There Occur an Error! ♠</strong>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-5">
								<button type="button" id="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>