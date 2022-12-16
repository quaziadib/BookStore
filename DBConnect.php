<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'the_book_store';


    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die("Connection faild: ".$conn->connect_error);
    }else{
        mysqli_select_db($conn, $database);
        //echo "Connection succeeded!";
    }
?>