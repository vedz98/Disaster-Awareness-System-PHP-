<?php 
include('security.php');


if (isset($_POST['submit'])) 
  {
    // Add task to DB
	  
	$author = $_POST['author'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$image = $_FILES["image"]['name'];  
    
	if(file_exists("upload/".$_FILES["image"]["name"]))
	{
		$store = $_FILES["image"]["name"];
		$_SESSION['status'] = "Image Already Exists. '.$store.'";
		header('Location:../new-post.php');
	}
	else 
	{
		$query = "INSERT INTO POSTS (`author`, `title`, `content`, `image`) VALUES('$author','$title','$content','$image')";
		//$insert = $this->db->query($query);
		$query_run = mysqli_query($connection, $query);

			if($query_run)
			{
				move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
				$_SESSION['success'] = "Added Successfully";
				header('Location:../new-post.php');
			}
			else
			{
				$_SESSION['success'] = "Attempt Failed";
				header('Location:../new-post.php');
			}

	}
  }

     
  













?>