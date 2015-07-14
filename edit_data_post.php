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
   /* #hidevalue{display: none;}*/
	</style>
	<script>

    CKEDITOR.on( 'instanceReady', function( evt ) {
      var editor = evt.editor;
      // var data=document.getElementById('hidevalue').value;
      // editor.setData(data);

      // Apply focus class name.data
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
        <li><a href="login.html" id="logout"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <!--    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<div id="user_view">
</div>
<div id="post_category">
</div>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "123";
      $database="app_login";
      // get id for url
      $id = $_GET['user_id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  // select all user 

  $sql="SELECT * from tb_information WHERE id='$id'";
  $result=mysqli_query($conn, $sql);
  if($result){
    foreach ($result as $row) 
      $id=$row['id'];
      {?>
      
     
<form  action ="<?php echo 'update_data_post.php?user_id='.$id;?>" method="post">
    <div class="container" id="container">
      <div class="form-group" id="form-group">
        <div class="col-xs-3">
          <label for="ex1">Title</label>
          <input class="form-control" id="ex1" type="text" name="title" id="title" value="<?php echo $row['title'];?>">
        </div>
        <div class="col-xs-4">
          <label for="ex2">Category</label><br/>
            <select class="btn btn-info" name="category" id="category">
                <option value="<?php echo $row['category'];?>" ><?php echo $row['category'];?></option>
                <option value="<?php echo $row['category'];?>" > About me</option>
                <option value="<?php echo $row['category'];?>" >New</option>
              </select>
        </div>
        </div><br/><br/><br/>
        <div class="container" id="textedit">
      <p>
      <textarea class="ckeditor" cols="80" id="editor3" rows="10" tabindex="3" name="text_post" id="text_post" ><?php echo $row['text_user'];?></textarea>
      
    </p>
    <?php echo " <a href=\"update_data_post.php?user_id=".$id. "\" onclick=\"return confirm('Are you sure you want to update datas?');\"><button class='btn btn-success' type='submit' name='submit' id='submit'>Update post</button></a>";?>
    </div>
      </div>
    <?php }
    echo "</table>";

  }else{
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  }
?>    
<div id="viewallcate"></div>
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
         $("#viewallcate").hide();
          $("#container").hide();
         }});
    }); 
    $("#create_user").click(function(){
        $.ajax({url: "create_user.php", success: function(result){
        $("#create_users").html(result);
         $("#editor_php").hide();
          $("#viewallcate").hide();
          $("#container").hide();
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
  //      $.ajax({url: "post_data.php", success: function(result){
  //          $("#post").html(result);
  //         }});
    // }); 
  //    $("#logout").click(function(){
  //      $.ajax({url: "index.html", success: function(result){
  //          html.val("index.html");
    // });

  //    $("#post_actical").click(function(){
  //      $.ajax({url: "post_page.php", success: function(result){
  //       $("#post_category").html(result);
  //         }});
    // }); 
   </script>
 
</body>
</html>