<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['author_id']) && isset($_POST['Wname']) && isset($_POST['Wemail']) && isset($_POST['email'])){
	// write the query to check if this username and password exists in our database
	$author_id = $_POST['author_id'];
    $Wname = $_POST['Wname'];
    $Wemail = $_POST['Wemail'];
    $email = $_POST['email'];
	$admin_id = "admin";
    

    $sql = "UPDATE author SET author_id = '$author_id', Wname= '$Wname', Wemail= '$Wemail', email = '$email', admin_id = '$admin_id' WHERE author_id = '$author_id';";
    
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if(mysqli_affected_rows($conn)){
		header("Location: author_ad_view.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
