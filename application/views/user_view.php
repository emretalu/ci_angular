<!DOCTYPE html >
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Codeigniter - Angular</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>assets/scripts.js"></script>
	</head>
	<body ng-app>
		<div class="container">
			<div class="col-lg-12 col-md-12">
				<table ng-controller="userController" class="table table-bordered table-condensed table-responsive">
					<thead>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Surname</td>
							<td>Email</td>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="user in users">
							<td>{{user.id}}</td>
							<td>{{user.name}}</td>
							<td>{{user.surname}}</td>
							<td>{{user.email}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>