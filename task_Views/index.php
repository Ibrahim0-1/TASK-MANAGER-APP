<?php
require '../task_Controllers/retrieveTask.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>
</head>
<body>
  

<h1> Task Manager</h1>
  <form action="../task_Controllers/addTask.php" method="POST">

    <label for="title">Title:</label>
    <input type="text" name="title" size="40" placeholder="Nouvelle tache" >
      &nbsp;&nbsp;&nbsp;
    <label for="description">Description:</label>
    <input type="text" name="description" size="70" placeholder="Description" >
      &nbsp;&nbsp;&nbsp;
    <button> Ajouter </button>
    <input type="reset" value="Effacer">

  </form>
  <br> <br>
 <?php $tasks= getTasks_Controller(); ?>
 <style>
  #t, td , th{
    border: black solid 1px  ;
}
  #t{
  border-collapse: collapse;
}
 </style>
   <table id="t" >
              <tr>               
                <th> Titre </th>
                <th> Description </th>
                <th > Actions </th>
              </tr>
  <?php 
        
        foreach($tasks as $task){ ?>           
              <tr>
                <td>&nbsp; <?php echo $task['title'] ;?> &nbsp;</td> 
                <td>&nbsp; <?php echo $task['description'] ;?> &nbsp;</td>
                <td>  &nbsp; 
                      <a href="../task_Controllers/deleteTask.php?id=<?php echo $task['id'] ;?>"><button> &#x1f5d1; </button> </a>  &nbsp;
                      <a href="modifierTask.php?id=<?php echo $task['id'] ;?>&title=<?php echo $task['title'] ;?>&description=<?php echo $task['description'] ;?> "><button>&#9998;</button>  </a> 
                      &nbsp;
                </td>
              </tr>
           
  <?php }?>
 </table>

</body>
</html>
 