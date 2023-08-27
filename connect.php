<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "webthucchien";


    //create
    $conn = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset($conn, "UTF8");

    //check
    if(!$conn){
        die("Connect failed: " . mysqli_connect_error());
    }else{
        
    }
?>