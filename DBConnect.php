<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'school';


    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error){
        die("Connection faild: ".$conn->connect_error);
    }else{
        mysqli_select_db($conn, $database);
        echo "Connection succeeded!";
    }
?>