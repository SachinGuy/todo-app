<?php 
    include "db_conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Get task and id
        $status = $_POST["status"];
        $id = $_POST["id"];
        $updateQuery = "UPDATE tasks SET status = $status WHERE id = $id";
        //Update the staus.
        $conn->query($updateQuery);
        
    }
    $conn->close();

