
<?php

require_once "../admin/functions/db.php";

$names = $_POST['names'];
$email = $_POST['email'];
$ic_no = $_POST['ic_no'];
$phone_no = $_POST['phone_no'];
$address = $_POST['address'];

if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO contacts(names, email, ic_no, phone_no, address)
    VALUES (?,?,?,?,?)";

    $stmt = $db->prepare($sql);


    try {
      $stmt->execute([$names, $email, $ic_no, $phone_no, $address ]);
      header('Location:../contact.php?sent');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}






?>