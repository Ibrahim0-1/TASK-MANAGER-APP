<?php
require '../task_Models/db.php';
if (!empty($_GET['id']) ){
$task= new Task();
$task->deleteTask($_GET['id']);
}
header("Location: ../task_Views/index.php");
?>