    <?php 
session_start();

if (isset($_SESSION['username'])) {

$item=$_POST['password'];

unset($_SESSION['username'][$item]);
if(unset($_SESSION['username'][$item]);){
	include 'logout.php';
}esle{

	echo "can not logout";
}
echo json_encode($_SESSION['username']);

}