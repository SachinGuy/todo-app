<?php 
    include "db_conn.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = $_POST["id"];
        $deleteQuery = "DELETE FROM tasks WHERE id = $id";

        if($conn->query($deleteQuery) !== TRUE)
        {
            echo "Error Deleting Task: " . "<br>" . $conn->error;
        }
    }
    $conn->close();
