<?php 

$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection, 'company');


if(isset($_POST['updatedata']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$type = $_POST['type'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	
	$query = "UPDATE colleges SET name='$name', address='$address', type='$type', lat='$lat', lng='$lng' WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
	
		echo'<script>alert("Data Updated"); </script>';
		header("location:../news-details.php");
	}
	else
	{
		echo'<script>alert("Data Not Updated"); </script>';
	}
}
?>