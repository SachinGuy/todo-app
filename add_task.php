<?php 
    //Connect to database;
    include "db_conn.php";
    //If client request is post
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        //Get form task data.
        $task = $_POST["task"];
        $insertQuery = "INSERT INTO tasks (task) VALUES ('$task');";
        //If query is successful.
        if($conn->query($insertQuery) === TRUE)
        {
            //Go to home page.
            header("Location: index.php");
            $conn->close();
            exit();
        }else
        {
            echo "Error: " . $insertQuery . "<br>" . $conn->error ;
        }
    }
