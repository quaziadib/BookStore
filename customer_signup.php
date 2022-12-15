<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['user_id']) && isset($_POST['Cname']) && isset($_POST['Cemail']) && isset($_POST['Cpassword']) && isset($_POST['Ccontactno'])){
	// write the query to check if this username and password exists in our database
	$user_id = $_POST['user_id'];
	$Cname = $_POST['Cname'];
    $Cemail = $_POST['Cemail']
	$Cpassword = $_POST['Cpassword'];
	$Ccontactno = isset($_POST['Ccontactno']);
	
	$sql = " INSERT INTO student VALUES( '$user_id', '$Cname', '$Cpassword', '$Ccontactno') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
    /*
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: show_students.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: add_student.php");
	}*/
	
}


?>