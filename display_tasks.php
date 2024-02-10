<?php 
    include "db_conn.php";

    $selectQuery = "SELECT * FROM tasks";
    $result = $conn->query($selectQuery); //get tasks.

    //Check if there are any tasks
    if($result->num_rows > 0)
    {
        //Get the next task
        while($row = $result->fetch_assoc())
        {
            $id = $row["id"];
            $task = $row["task"];
            $status = $row["status"];

            //Generate li this.checked is checked prop. of input element.
            echo "<li>";
            echo "<input type = 'checkbox' onchange = 'updateTaskStatus($id, this.checked);' " . ($status ? 'checked' : '') . ">";
            echo "<span class = '" . ($status ? 'completed' : '') . "'>$task</span>";
            echo "<button onclick = 'deleteTask($id);'>Delete Task</button>";
            echo "</li>";
        }
    }else
    {
        echo "<p> No tasks found! </p>";
    }
    $conn->close();
