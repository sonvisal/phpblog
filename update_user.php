<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "123";
$database="app_login";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
		$firstname=$_POST['first_name'];
		$lastname=$_POST['last_name'];
		$user_name=$_POST['user_name'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$id = $_GET['user_id'];
		if(!empty($firstname) && !empty($lastname) && !empty($user_name) && !empty($email) && !empty($pass)){
				$validat_email="SELECT username,email from user";
				$result = mysqli_query($conn, $validat_email);
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_assoc($result)){
						if($email==$row['email'] && $user_name==$row['username']){
									include("edit_user.php");
								}elseif (($email!=$row['email'] && $user_name!=$row['username'])){
										$sql="UPDATE user SET firstname='$firstname',lastname='$lastname',username='$user_name',email='$email',password='$pass' WHERE id='$id'";
									if (mysqli_query($conn , $sql)) {
										$_SESSION["username"] = $row['username'];
								    	include("admin.php");
										} else {
								    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
								}
				}else{
					echo "your email already registor";
				}
		}
}
?>