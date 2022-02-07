<?php 
session_start(); 
include_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <div class="flex">
        <?php include_once('blocks/header.php'); ?>
    
        <div class="content">
            <div class="wrap">
                <h2 class="content__heading">
                    Добро пожаловать, <?= $_SESSION['login']; ?>
                </h2>
                <?php echo $_SESSION['userid']; ?>
            </div>
        </div>

        <?php include_once('blocks/footer.php'); ?>    
    </div>
</body>
</html>