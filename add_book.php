<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['book_id'])){
	// write the query to check if this username and password exists in our database
	$book_id = $_POST['book_id'];
    $Bname = $_POST['Bname'];
    $Bpub_year = $_POST['Bpub_year'];
    $Bprice = $_POST['Bprice'];
    $admin_id = "admin";
    $pub_id = $_POST['pub_id'];
    $sql = "INSERT INTO book VALUES ('$book_id', '$Bname', '$Bpub_year', '$Bprice', '$admin_id', '$pub_id');";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	
	//check if it returns an empty set
    
	if(mysqli_affected_rows($result)>0){
		header("Location: books_ad_view.php");
	}
	else{
		echo "Project Failed! 404!";
		//header("Location: index.php");
	}
	
}
?>
