<!DOCTYPE html>
<html>
<head>
	<title>Inventory Mini Jaya Sejahtera</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
					<h2>Inventory Mini Jaya Sejahtera</h2>
				</div>
				<div class="card-body">
					<form action="proseslogin.php" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="username" id="username" class="form-control" name="username" required/>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" required />
						</div>
						<input type="submit" class="btn btn-primary w-100" value="Login" name="">
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; Mini Jaya Sejahterah</small>
				</div>
			</div>
		</div>
	</div>
</body>
</html>