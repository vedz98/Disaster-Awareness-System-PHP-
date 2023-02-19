<?php 

$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection, 'company');


if(isset($_POST['updatedata']))
{
	$id = $_POST['id'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	$query = "UPDATE posts SET author='$author', title='$title', content='$content' WHERE id='$id'";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
	
		echo'<script>alert("Data Updated"); </script>';
		header("location:../posts.php");
	}
	else
	{
		echo'<script>alert("Data Not Updated"); </script>';
	}
}
?>