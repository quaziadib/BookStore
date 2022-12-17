
<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['pub_id']) && isset($_POST['author_id'])){
	// write the query to check if this username and password exists in our database
	$pub_id = $_POST['pub_id'];
    $author_id = $_POST['author_id'];
   
	
    $sql = "INSERT INTO Send_Manuscript VALUES ('$pub_id', '$author_id');";
    
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if(mysqli_affected_rows($conn)){
		header("Location: author_req_page.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
