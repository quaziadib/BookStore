<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['admin_id']) && isset($_POST['WAame']) && isset($_POST['Aemail']) && isset($_POST['Apassword']) && isset($_POST['pub_id']) && isset($_POST['author_id'])){
	// write the query to check if this username and password exists in our database
	$admin_id = $_POST['admin_id'];
    $Aname = $_POST['Aname'];
    $Aemail = $_POST['Aemail'];
    $Apassword = $_POST['Apassword'];
    

    $sql = "UPDATE Book SET admin_id = '$admin_id', Aname= '$Aname', Aemail= '$Aemail', Apassword = '$Apassword' WHERE admin_id = '$book_id';";
    
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if(mysqli_affected_rows($conn)){
		header("Location: admin_ad_view.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
