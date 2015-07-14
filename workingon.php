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
	$querys="select *from tb_information where category='Working on'";
			$result = mysqli_query($conn, $querys);
			if($result){?>
				<div class="col-md-8">
				<?php foreach ($result as $key ) {?>
				       		<h3><?php echo $key['title'];?></h3>
				        	<?php echo $key['category']?>
				          	<?php echo $key['text_user'];?>  

				<?php }
			}else{

				echo "you can not insert data";
			}?>
			</div>
<?php } ?>