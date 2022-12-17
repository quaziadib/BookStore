<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['author_id']) && isset($_POST['Wname']) && isset($_POST['Wemail']) && isset($_POST['Wpassword']) && isset($_POST['Plicense_no']) && isset($_POST['Pbank_ac_no'])){
	// write the query to check if this username and password exists in our database
	$author_id = $_POST['author_id']
	$Wname = $_POST['Wname'];
    $Wemail = $_POST['Wemail']
	$Wpassword = $_POST['Wpassword'];

	
	$sql = " INSERT INTO student VALUES( '$author_id', '$Wname', '$Wemail', '$Wpassword');";
	
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