<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['book_id'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['book_id'];
	$sql = "DELETE FROM book WHERE book_id='$u';";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if($result){
		header("Location: books_ad_view.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
