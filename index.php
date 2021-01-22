<?php
require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8"/>

<head>
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class=bg-1>
    <div class= "container">
        <h1 class="text-center" >Todo List</h1>
    </div>
    <div class="container-fluid text-center">
        <div class ="addTask" >
        <form action="app/add.php" method="POST" autocomplete="off">
            <input type= "text"  name="title"  placeholder="Add your task">
            
            <button type="submit">Add</button>
            </form>
            <br/>
            <form action="app/update.php" method="POST" autocomplete="off">
            <input type= "text"  name="targetName"  placeholder="Task to modify">
            <input type= "text"  name="newName"  placeholder="New task name">
            <button type="submit">Modify</button>
            </form>
            <?php 
          $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
       ?>
        
                <h3>Mes Taches</h3>
                <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                    <form action="app/remove.php" method="POST" autocomplete="off">
                <li> <?php echo $todo['title'] ?>
               
                    <button class="btn" type="submit" name="id" value="<?php echo $todo['id'] ?>"><span class="glyphicon glyphicon-trash"  aria-hidden="true"></span></button>
                    
                </li>
                </form>
            
            <?php } ?>
            
            <!-- <ol class = "tacheFini">
                <h3>Tache réaliser</h3>
                <li> Task 
                    <button><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                </li>
            </ol> -->
            
            
        </div>
    </div>
        
    
</body>
</html>
