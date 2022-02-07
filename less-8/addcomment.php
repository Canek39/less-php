<?php
include_once('db.php');

if(isset($_POST['name']) && isset($_POST['comment'])){
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comment VALUES (NULL,'$name','$comment',NULL)";
    if(mysqli_query($connect, $sql)){
        header("Location: review.php");
    }else{
        echo "Ошибка";
    }
}else{
    header("Location:rewiew.php");
}