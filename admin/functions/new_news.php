<?php 
include('security.php');


if (isset($_POST['submit'])) 
  {
    // Add task to DB
	  
	$name = $_POST['name'];
	$address = $_POST['address'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];  
    $type = $_POST['type'];
	//$analysis = $_FILES["analysis"]['name'];
	//if(file_exists("analysis/".$_FILES["analysis"]["name"]))
	//{
	//	$store = $_FILES["analysis"]["name"];
	//	$_SESSION['status'] = "File Already Exists. '.$store.'";
	//	header('Location:../new-news.php');
	//}
	//else 
	//{
		$query = "INSERT INTO COLLEGES (`name`, `address`, `lat`, `lng`, `type`) VALUES('$name','$address','$lat','$lng','$type')";
		//$insert = $this->db->query($query);
		$query_run = mysqli_query($connection, $query);

			if($query_run)
			{
			//	move_uploaded_file($_FILES["analysis"]["tmp_name"], "upload/".$_FILES["analysis"]["name"]);
				$_SESSION['success'] = "Added Successfully";
				header('Location:../new-news.php');
			}
			else
			{
				$_SESSION['success'] = "Attempt Failed";
				header('Location:../new-news.php');
			}

	//}
  }

     
  













?>