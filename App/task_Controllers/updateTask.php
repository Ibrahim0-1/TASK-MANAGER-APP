<?php
require '../task_Models/db.php';
if (!empty($_POST['id']) && !empty($_POST['description']) && !empty($_POST['title'])){
$task= new Task();
$task->updateTask($_POST['id'], $_POST['title'], $_POST['description']);
}
header("Location: ../task_Views/index.php");
?>