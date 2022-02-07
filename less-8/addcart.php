<?php 
session_start();
include_once('db.php');

    $idGood = $_POST['id'];
    $userId = $_SESSION['userid'];
    $goodCount = $_POST['count'];

    $sql = "SELECT `good_id` FROM `cart` WHERE `good_id` = '$idGood' AND `user_id` = '$userId'";
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);
    
    if(mysqli_num_rows($res)){
        $sql = "update cart set count = count+$goodCount where good_id = $idGood and user_id = $userId";
        $res = mysqli_query($connect, $sql);
        if($res){
            header("Location: good.php?id=$idGood");
        }
    }else{
        $sql = "INSERT INTO `cart`(`id`, `good_id`, `user_id`, `count`) VALUES (NULL,'$idGood','$userId','$goodCount')";
        $res = mysqli_query($connect, $sql);
        if($res){
            header("Location: good.php?id=$idGood");
        }
    }


    
?>