<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['pub_id']) && isset($_POST['Pname']) && isset($_POST['Pemail']) && isset($_POST['Ppassword']) && isset($_POST['Plicense_no']) && isset($_POST['Pbank_ac_no'])){
	// write the query to check if this username and password exists in our database
	$pub_id = $_POST['pub_id'];
	$Pname = $_POST['Pname'];
    $Pemail = $_POST['Pemail'];
	$Ppassword = $_POST['Ppassword'];
	$Plicense_no = $_POST['Plicense_no'];
	$Pbank_ac_no = $_POST['Pbank_ac_no'];
	$admin_id = 'admin';
	
	$sql = " INSERT INTO student VALUES( '$pub_id', '$Pname', '$Pemail', '$Ppassword', '$Plicense_no', '$Pbank_ac_no', '$admin_id') ";
	
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