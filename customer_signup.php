<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['user_id']) && isset($_POST['Cname']) && isset($_POST['Cemail']) && isset($_POST['Cpassword']) && isset($_POST['Ccontactno'])){
	// write the query to check if this username and password exists in our database
	$user_id = $_POST['user_id'];
	$Cname = $_POST['Cname'];
    $Cemail = $_POST['Cemail'];
	$Cpassword = $_POST['Cpassword'];
	$Ccontactno = $_POST['Ccontactno'];
	$admin_id = "admin";
	
	$sql = "INSERT INTO customer VALUES( '$user_id', '$Cname', '$Cemail', '$Cpassword', '$Ccontactno', '$admin_id'); ";
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
    
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: books_customer_view.php");
	}
	else{
		echo "Insertion Failed";
		
	}
	
}


?>