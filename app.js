//Update Task Status client request via POST
function updateTaskStatus(id, isChecked) 
{
    fetch('update_status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}&status=${(isChecked) ? 1 : 0}`
    })
    .then(response => response.text())
    .then(data => {
        //console.log(data);
        window.location.reload();
    })
    .catch(error => console.log('Error Sending update request: ', error));
}
//Delete Task client request via POST
function deleteTask(id) {
    fetch('delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}`
    })
    .then(response => response.text())
    .then(data => {
        window.location.reload();
    })
    .catch(error => console.error("Error Sending delete request: ", error));
}