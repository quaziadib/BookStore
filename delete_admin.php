<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['admin_id'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['admin_id'];
	$sql = "DELETE FROM admin WHERE admin_id='$u';";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if($result){
		header("Location: admin_ad_view.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
