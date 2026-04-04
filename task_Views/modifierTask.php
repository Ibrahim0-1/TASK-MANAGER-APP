<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css"/>
  <title>Task Manager </title>
</head>
<body>
  <h1> Task modifier </h1>
    <form action="../task_Controllers/updateTask.php" method="POST">
    <input type="text" name="id" VALUE='<?php echo $_GET['id'] ;?>' hidden>

    <label for="title" >Title:</label>
    <input type="text" name="title" placeholder="Nouvelle tache" size="40" VALUE='<?php echo $_GET['title'] ;?>'> <br><br>

    <label for="description">Description:</label>
    <input type="text" name="description" placeholder="Description"  size="70" value='<?php echo $_GET['description'] ;?>'> <br><br>
    &nbsp; <button> &#9998; </button> &nbsp; &nbsp;
    &nbsp; <input type="reset" value="&#8634;">
    
  </form>
  <hr>
<br>  <br>
&nbsp;&nbsp; <a href="index.php"><button> &#x2302;  Home </button></a> 

</body>
</html>