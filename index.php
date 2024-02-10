<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO App</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <div class="container">
        <h2>TODO App</h2>

        <!-- Form to add task-->
        <form action="add_task.php" method="post">
            <input type="text" name="task" placeholder="Add a new task" required>
            <button type="submit">Add Task</button>
        </form>

        <!-- List of tasks-->
        <ul>
            <?php include "display_tasks.php"; ?>
        </ul>
    </div>
</body>
</html>