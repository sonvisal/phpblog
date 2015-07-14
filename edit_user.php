<!DOCTYPE html>
<html>
<head>
	<title>edit user</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
	<script src="ckeditor.js"></script>
	<link href="../simples/sample.css" rel="stylesheet">
	<style>
		.cke_focused,
		.cke_editable.cke_focused
		{
			outline: 3px dotted blue !important;
			*border: 3px dotted blue !important;	/* For IE7 */
		}
	</style>
	<script>
		CKEDITOR.on( 'instanceReady', function( evt ) {
			var editor = evt.editor;
			editor.setData( 'This editor has it\'s tabIndex set to <strong>' + editor.tabIndex + '</strong>' );

			// Apply focus class name.
			editor.on( 'focus', function() {
				editor.container.addClass( 'cke_focused' );
			});
			editor.on( 'blur', function() {
				editor.container.removeClass( 'cke_focused' );
			});
			// Put startup focus on the first editor in tab order.
			if ( editor.tabIndex == 1 )
				editor.focus();
		});
	</script>
</head>
<body>

	
	<form action="post_data.php" method="post">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Welcome to Back end </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">User<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" id="viewuser">View user</a></li>
            <li><a href="#" id="create_user">Create user</a></li>
          </ul>
        </li>
        <li><a href="admin.php" id="post_actical">Post actical</a></li>
        <li><a href="#" id="viewallcategory">View all Category</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" id="logout"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <!--    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<div id="user_view">
</div>
<div id="post_category">
</div>
<div id="editor_php">
  <!-- end text editor  -->
  </div>
  <!-- div for show create user -->
  <div id="create_users">
  	
  </div>
  <?php
		$servername = "localhost";
		$username = "root";
		$password = "123";
		$database="app_login";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
		$id = $_GET['user_id'];
		// $id=$_GET['id'];
			$sql =  "SELECT * FROM user where id='$id'";
			$result = mysqli_query($conn, $sql);
			if ($result) {

				foreach ($result as $key) 
					$id=$key['id'];

					{	?>
			<form  action="<?php echo 'update_user.php?user_id='.$id;?>" method="post">
		    	<div class="row">
		   		 <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<h2>Please Update user</small></h2>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
		                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required value="<?php echo $key['firstname'];?>">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?php echo $key['lastname'];?>" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="user_name" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3" value="<?php echo $key['username'];?>" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?php echo $key['email'];?>" required>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" value="<?php echo $key['password'];?>" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" value="<?php echo $key['password'];?>" required>
							</div>
						</div>
					</div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><?php echo "<a href=\"update_user.php?user_id=".$id . "\" onclick=\"return confirm('Are you sure you want to update datas?');\"><button type='submit' class='btn btn-success btn-block btn-lg' id='edit_user'>Update user</button></a>";?></div>
					</div>
					</form>
			<?php		}  } else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
			

			
	?>
  <div id="post"></div>
<hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#">© 2015 Visal Son.</a></li>
                <li><a href="#">Responsability</a></li>
                <li><a href="#">alway smile</a></li>
            </ul>
        </div>
    </div>
    </form>
    <script type="text/javascript">
    	$("#viewuser").click(function(){
    		$.ajax({url: "view_user.php", success: function(result){
        $("#user_view").html(result);
         $("#editor_php").hide();
         
   			 }});
		}); 
		$("#create_user").click(function(){
    		$.ajax({url: "create_user.php", success: function(result){
        $("#create_users").html(result);
         $("#editor_php").hide();

   			 }});
		}); 
    $("#viewallcategory").click(function(){
        $.ajax({url: "viewalldatapost.php", success: function(result){
        $("#viewallcate").html(result);
        $("#textedit").hide();
        $("#form-group").hide();
      
         }});
    }); 
		// $("#post_actical").click(function(){
  //   		$.ajax({url: "post_data.php", success: function(result){
  //       		$("#post").html(result);
  //  			 }});
		// }); 
  //   	$("#logout").click(function(){
  //   		$.ajax({url: "index.html", success: function(result){
  //      		html.val("index.html");
		// });

  //   	$("#post_actical").click(function(){
  //   		$.ajax({url: "post_page.php", success: function(result){
  //       $("#post_category").html(result);
  //  			 }});
		// }); 
   </script>
</body>
</html>