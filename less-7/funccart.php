<?php
session_start();
include_once('db.php');

if($_POST['delete']){
    $goodId = $_POST['good_id'];
    $goodCount = $_POST['count'];
    $userId = $_SESSION['userid'];

    if($goodCount > 1){
        $sql = "update cart set count = count-1 where good_id = $goodId and user_id = $userId";
        $res = mysqli_query($connect, $sql);
        if($res){
            header("Location: cart.php");
        }
    }else{
        $sql = "delete from cart where good_id = $goodId";
        $res = mysqli_query($connect, $sql);
        if($res){
            header("Location: cart.php");
        }
    }
}

?>