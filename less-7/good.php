<?php
session_start(); 
include_once('db.php');
$sql = "select title from goods where id=".$_GET['id'];
$res = mysqli_query($connect, $sql);
$title = mysqli_fetch_assoc($res)['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="flex">
        <?php include_once('blocks/header.php'); ?>
        
        <div class="content">
            <div class="wrap">
                <?php include_once('goodsfull.php'); ?>
            </div>
        </div>

        <?php include_once('blocks/footer.php'); ?>
    </div>
</body>
</html>