 <!DOCTYPE html>
<html>
<head>
	<title> registation</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<form action="validation.php" method="post" enctype="multipart/form-data">
		<div class="row">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form">
					<h2>Please Create user</small></h2>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
		                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
							</div>
						</div>
					</div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><button type="submit" class="btn btn-success btn-block btn-lg" id="createuser">Create user</button></div>
					</div>
				</form>
			</div>
		</div>
<!-- Modal -->

</div><!-- /.modal -->
</form>
</div>
	<script type="text/javascript">
	// $("#createuser").click(function(){
	// 			bootbox.alert("Hello world!", function() {
	// 	  Example.show("Hello world callback");
	// 		});
	// });
	// </script>
</body>
</html>