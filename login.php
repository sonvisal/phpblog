<!DOCTYPE html>
<html>
<head>
	<title>user login user</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</head>
<body>
	<form action="validat_login.php" method="post" enctype="multipart/form-data">
	<div class="container">
    	<div class="row" style="padding-top:100px; background-color:#">
			<div class="col-md-6 col-md-offset-3">
				<hr>
				<div class="panel panel-login">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username"  value='' required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
									<div class="panel-heading">
									<div class="row">
										<div class="col-xs-6">
											<button class="btn btn-success btn-block btn-lg" type="submit" name="login" >Sign In</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
 
</body>
</html>
   