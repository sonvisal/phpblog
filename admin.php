<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
        <li><a href="logout.php" id="logout"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
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
<div class="container">

	    <div class="form-group" id="form-group">
	      <div class="col-xs-3">
	        <label for="ex1">Title</label>
	        <input class="form-control" id="ex1" type="text" name="title" id="title">
	      </div>
	      <div class="col-xs-4">
	        <label for="ex2">Category</label><br/>
	          <select class="btn btn-info" name="category" id="category">
                <option value="Working on" >Working on</option>
                <option value="About me" > About me</option>
                <option value="New" >New</option>
              </select>
	      </div>
   
	    </div>

	</div><br/>
	<!-- div for text editor php -->
    <div id="viewallcate"></div>
  	<div class="container" id="textedit">
  		<p>
			<textarea class="ckeditor" cols="80" id="editor3" rows="10" tabindex="3" name="text_post" id="text_post"></textarea>
		</p>
		<button class="btn btn-success" type="submit" name="submit" id="submit">Post</button>
  	</div>
  <!-- end text editor  -->
  </div>
  <!-- div for show create user -->
  <div id="create_users">
  	
  </div>
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
   </script>
 </form>
</body>
</html>