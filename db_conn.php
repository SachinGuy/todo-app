<?php 
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "todo_app";
    //Create Connection
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    //Check Connection
    if ($conn->connect_error) {
        die("Connection Failed: ". $conn->connect_error);
    }
