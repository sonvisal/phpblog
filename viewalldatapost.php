<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<?php
// Establish Connection to the Database
$con = mysqli_connect("localhost","root","123","app_login");//Records per page
$per_page=5;
if (isset($_GET["page"])) {
$page = $_GET["page"];
}
else {
$page=1;
}
// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
//Selecting the data from table but with limit
$query = "SELECT * FROM tb_information LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
?>
<table class="table table-striped">
<tr><th>ID</th><th>Title</th><th>Text body</th><th>Category</th><th>Action</th></tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
	$id=$row["id"];
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row['text_user']; ?></td>
<td><?php echo $row['category']; ?></td>
<?php echo "<td ><a href=\"delete_pagepost.php?user_id=".$id . "\" onclick=\"return confirm('Are you sure you want to delete datas?');\"><i class='glyphicon glyphicon-trash'></i></a> <a href=\"edit_data_post.php?user_id=".$id . "\" onclick=\"return confirm('Are you sure you want to edit datas?');\"><i class='glyphicon glyphicon-edit'></i></a></td>"?>
</tr>
<?php
};
?>
</table>
<div>
<?php
//Now select all from table
$query = "select * from tb_information";
$result = mysqli_query($con,$query);
// Count the total records
$total_records = mysqli_num_rows($result);
//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);
//Going to first page
echo "<center><a href='viewalldatapost.php?page=1'>".'<span class="glyphicon glyphicon-fast-backward">'."</a> ";
for ($i=1; $i<=$total_pages; $i++){
echo "<a href='viewalldatapost.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='viewalldatapost.php?page=$total_pages'>".'<span class="glyphicon glyphicon-fast-forward"></span>'."</a></center>";
?>
</div>
</body>
</html>