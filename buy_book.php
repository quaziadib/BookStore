<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');


// we need to check if the input in the form textfields are not empty
if(isset($_POST['book_id']) && isset($_POST['trx_id']) && isset($_POST['user_id'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['book_id'];
    $t = $_POST['trx_id'];
    $k = $_POST['user_id'];
	
	$sql = "SELECT * FROM book WHERE book_id = '$u';";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO buy_book VALUES( '$t', '$u', '$k');";
	
	//Execute the query 
	$result1 = mysqli_query($conn, $sql1);
	
	
	//check if it returns an empty set
    
	if(mysqli_num_rows($result) !=0 ){
		echo "I am here";
		header("Location: final_book.php");
	}
	else{
		echo "Username or Password is wrong";
		//header("Location: index.php");
	}
	
}
?>
