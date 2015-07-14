<?php
session_start();
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
	if (isset($_POST['login'])) {
		    $user = $_POST['username'];
		    $pwd = $_POST['password'];
		    $query = "select username, password from user";
		    $result = mysqli_query($conn, $query);
		    if (mysqli_num_rows($result)) {
		        while ($row = mysqli_fetch_assoc($result)) {
		            if ($user == $row['username'] && $pwd == $row['password']) {
		            	$_SESSION["username"] = $row['username'];
		              // include 'admin.php';
		              header('location:admin.php');
		            } else{
		            	echo "<script> alert('your username and password requied')</script>";
		            	include 'login.php';
		            	// header('location:login.html');
		            } 
		            break;
		    }
		}
	}
}
?>
