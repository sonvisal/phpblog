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
		 	$title=$_POST['title'];
		 	$text_user=$_POST['text_post'];
		 	$category=$_POST['category'];
		 	$id=$_GET['user_id'];

		 if(!empty($title) && !empty($text_user) && !empty($category)){
		 	$query="UPDATE tb_information  SET title='$title',text_user='$text_user',category='$category' where id='$id'";
			$result = mysqli_query($conn, $query);
		    if ($result) {
		     echo "<script>alert('successful');</script>";
		       include "admin.php";
		
		}else {
			echo"can not insert data";
		}

	 }else {
	 		
	 		include "admin.php";
		
		} 
}
  ?>