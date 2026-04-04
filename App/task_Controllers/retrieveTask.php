<?php
require '../task_Models/db.php';


function getTasks_Controller(){
$task_Obj= new Task();
$tasks= $task_Obj->getTasks();
return $tasks ;
}

?>