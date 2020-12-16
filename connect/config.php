<?php

    $db_host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "mehfildb";

    // Create Connection

    $conn = mysqli_connect($db_host, $username, $password, $db_name);

    // Check Connection
    if(!$conn){
        die("Connection Failed");
    }
    //echo "Connected Succefully <hr>";

    // Direct insert data

   /* $sql= "INSERT into user_table (username, num, email, password1,cpassword) VALUES  ('sachin', '1236547899', 'sachin@gmail.com', '123002', '123002')";

    if(mysqli_query($conn, $sql)){
        echo "New record inserted";
    }else{
        echo "unable to insert data";
    }*/

?>
