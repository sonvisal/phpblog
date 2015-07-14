<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="asset/css/icon-style.css"/> -->
	<style type="text/css">
	/*#row_menu{
		padding-top: 20px;
	}*/
  #row_menu a{
    padding: 10px;
  }
	#row div a {
		padding-left: 87px;
		padding-right: 87px;
		
	}
	# row_menu div {
		margin: auto;

	}
      #top-link-block.affix-top {
        position: absolute; /* allows it to "slide" up into view */
        bottom: -82px;
        left: 10px;
    }
    #top-link-block.affix {
        position: fixed; /* keeps it on the bottom once in view */
        bottom: 18px;
        right: 10px;
    }
  #banner{
  max-width:100%;
  height:auto;

  }
  #logo{
  max-width:100%;
  height:auto;
  width:350px;
  }
  .myphoto{
    max-width:100%;
    height:auto;
    width:360px;

  }
	</style>
</head>
<body>
<div class="col-md-12">
    <div style=" display:inline;">
              <img src="img/logo2.png" alt="your logo" id="logo"/>
                <img src="img/banner.jpg" alt="PHOTOYOU " id="banner"/>
    	 <div class="text-center center-block" style="float:right;margin-right:112px;margin-top:70px;">
                    <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                  <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                  <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                  <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
    </div>
    </div><br/><br/><br/>

    	<div class="container" id="row_menu">
        <div class="row" id="row">
          <div class="col-md-12">
            <div class="btn-group btn-breadcrumb" id="menurow">
                <a href="index.php" class="btn btn-primary"><i class="glyphicon glyphicon-home"></i></a>
                <a href="#" class="btn btn-info" id="aboutme" >About me</a>
                <a href="#" class="btn btn-success" id="workingon">Working on</a>
                <a href="#" class="btn btn-warning" id="news">News</a>
                <a href="#" class="btn btn-info" id="news">Location</a>
            </div>
            </div>
    	</div><br/>
      	<div   id="data_aboutme" class="col-md-8">
          <!-- this blog data about me -->
         </div>
         <div   id="data_workingon" class="col-md-8">
         <!-- this blog data working on-->
         </div>
      	<!-- <div id="container text-center" class="row">
        </div> -->
        <div id="datanews"></div>
          
     <?php
      $servername = "localhost";
      $username = "root";
      $password = "123";
      $database="app_login";
    //data login
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        $querys="select * from tb_information order by category asc ";
          $result = mysqli_query($conn, $querys);
            if ($result) {?>
            <div class="row" >
            <div class="col-md-8" id="home">
             <div >
             <?php foreach ($result as $key ) { ?>
                          <h3><i class="glyphicon glyphicon-subtitles"></i><span style="color:red;">Title:<?php echo $key['title'];?></h3></span>
                          <h4><span class="glyphicon glyphicon-forward"></span><span style="color:blue;">Category:<?php echo $key['category']?></h4></span>
                           <?php $text_user=$key['text_user'];
                                    echo $text_user;

                           ;?>
                           <div>
                           <i class="btn btn-primary" style="float:right;">
                              <a href="#" style="color:#fff; text-decoration:none;">Read More</a>
                           </i>
                           </div>
                      <?php } ?>
                       </div>
                     </div>
       <?php }else {
              echo"can not insert data";
            }
      }
      ?>
      <div class="col-md-4">
      <div class="well">
                  <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "123";
                    $database="app_login";
                  //data login
                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password,$database);
                  if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  }else{
                      $sql="SELECT DISTINCT category FROM tb_information";
                      $result = mysqli_query($conn, $sql);
                      if($result){
                        echo "<h3>Category post</h3>";
                        foreach ($result as $key ) {?>
                              <ul>
                                <li><?php echo $key['category']?></li>
                              </ul>
                            <?php  
                        }
                      }else{
                        echo "can not select category";
                      }
                  }
                  ?>
              </div>
             
                  <img src="img/myphotos.jpg" alt="myphoto" class="myphoto"/>
              </div>
              </div >
              <span id="top-link-block" class="hidden">
                <a href="#top" class="btn btn-success" onclick="$('html,body').animate({scrollTop:0},'slow');return false;" >
                    <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
                </a>
            </span>
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
    </div>
    </div>
    <script type="text/javascript">
    	$('#aboutme').click(function(){
       			$.ajax({url: "Aboutme.php", success: function(result){
          		 $("#data_aboutme").html(result);
               $("#data_workingon").hide();
               $("#datanews").hide();
               $("#home").hide();
       			 }});
    		}); 
    	$('#workingon').click(function(){
       			$.ajax({url: "workingon.php", success: function(result){
          		 $("#data_workingon").html(result);
          		 $("#data_aboutme").hide();
                $("#home").hide();
       			 }});
    		}); 
      $('#news').click(function(){
            $.ajax({url: "news.php", success: function(result){
               $("#datanews").html(result);
                $("#home").hide();
             }});
        }); 
         if ( ($(window).height() + 100) < $(document).height() ) {
            $('#top-link-block').removeClass('hidden').affix({
                // how far to scroll down before link "slides" into view
                offset: {top:100}
            });
        }

        // function load_about(){
        //   this.document.location.href = "login.html";
        // }
  </script>

</body>
</html>