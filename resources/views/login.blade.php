<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container mt-5">
		<div class="col-md-6 offset-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="text-center">Form Login</div>
				</div>
				<div class="panel-body">
					<form action="{{url('login/proses')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
						    <label for="user">Username</label>
						    <input type="text" class="form-control" name="name"  placeholder="Enter email">
						</div>
						<div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" name="password"  placeholder="Enter password">
						</div>					
						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>