reda reda <aderawado@gmail.com>
	
03:23 (il y a 0 minute)
	
À moi
  
<?php

if(isset($_POST['id'])){
    require '../db_connect.php';

    $id = $_POST['id'];

    if(empty($id)){
       echo 0;
    }else {
        $stmt = $conn->prepare("DELETE FROM todos WHERE id=?");
        $res = $stmt->execute([$id]);
        $conn = null;
        header("Location: ../index.php");
    }
}else {
    header("Location: ../index.php");
}


