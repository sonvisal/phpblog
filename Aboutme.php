    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
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
		$querys="select *from tb_information where category='About me'";
			$result = mysqli_query($conn, $querys);
		    if ($result) {?>

            <div class="col-md-8">
		       <?php foreach ($result as $key ) { ?>
		       	    
				       		<h3><?php echo $key['title'];?></h3>
				        	<?php echo $key['category']?>
								<i class="icon-search icon-white"></i>

				          	<?php echo $key['text_user'];?>
				          
				    
				    <h4 class="bold-txt">News and Events</h4>
               
		       	<?php } 
			}else {
					echo"can not insert data";
				}
		}


?>