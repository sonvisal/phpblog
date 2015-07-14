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
		 if(!empty($title) && !empty($text_user) && !empty($category)){
		 	$query="INSERT INTO  tb_information (title,text_user,category) VALUES ('$title','$text_user','$category')";
			$result = mysqli_query($conn, $query);
		    if ($result) {

		       include "admin.php";
		}else {
			echo"can not insert data";
		}
	 }else {
	 		echo"<script> alert('you must to input data');</script";
	 		include "admin.php";
		} 
}
  ?>