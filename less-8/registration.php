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
    <title>Регистрация</title>
</head>
<body>
    <div class="flex">
        <?php include_once('blocks/header.php'); ?>
    
        <div class="content">
            <div class="wrap">
                <h1 class="content__heading">Регистрация</h1>
                <?php
                if($_GET['success'] == "true"){
                    echo "<h2>Вы успешно зарегестрированы</h2><br>";
                }elseif($_GET['success'] == "false"){
                    echo "<h2>Такой логин уже существует</h2><br>";
                }
                ?>
                <form action="server.php" method="post">
                    <p>
                        Придумайте логин: <input type="text" name="login" required>
                    </p><br>
                    
                    <p>
                        Придумайте пароль: <input type="password" name="password" required>
                    </p><br>
                    
                    <input type="submit" value="Зарегистрироваться">
                </form>
            </div>
        </div>

        <?php include_once('blocks/footer.php'); ?>    
    </div>
</body>
</html>