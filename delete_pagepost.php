<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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
			$sql =  "DELETE FROM tb_information where id='$id'";
			if (mysqli_query($conn , $sql)) {
		    	include("admin.php");
				} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
			

			
	?>
</body>
</html>