<?php 
session_start();
include_once("db_goods.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Админка</title>
</head>
<body>
    <div class="flex">
        <?php include_once('../blocks/header.php'); ?>
    
        <div class="content">
            <div class="wrap">
            <?php
                if($_SESSION['login'] && ($_SESSION['role'] == 1)){
                    include_once('../blocks/adm_menu.php');
                    ?>
                 
                    <h2>Заказы</h2>
                    <table class="table">
                        <tr>
                            <th>Номер заказа</th>
                            <th>ФИО</th>
                            <th>Адрес доставки</th>
                            <th>Почтовый индекс</th>
                            <th>Телефон</th>
                            <th>Почта</th>
                            <th>Товар(ы) | Кол-во</th>
                            <th>Cтоимость заказа</th>
                            <th>Статус</th>
                            <th>Действие</th>
                        </tr>
                    
                    <?php include_once('allorders-view.php'); ?>
                    </table>
                <?php 
                }else{?>
                    <h2>Доступ только для администратора!!!!</h2>
               <?php     
                } 
            ?>
            </div>
        </div>

        <?php include_once('../blocks/footer.php'); ?>    
    </div>
</body>
</html>