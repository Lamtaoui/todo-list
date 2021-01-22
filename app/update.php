<?php

if (isset($_POST['targetName']) && isset($_POST['newName'])) {
    require '../db_connect.php';

    $target = $_POST['targetName'];
    $newName = $_POST['newName'];

    if (empty($target) || empty($newName)) {
        header("Location: ../index.php?mess=error");
    } else {
        // $stmt = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
        $stmt = $conn->prepare("UPDATE todos SET title = (?) WHERE title = (?)");
        $res = $stmt->execute([$newName,$target]);

        if ($res) {
            header("Location: ../index.php?mess=success");
        } else {
            header("Location: ../index.php");
        }
        $conn = null;
        exit();
    }
} else {
    header("Location: ../index.php?mess=error");
}
