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
    <title>Корзина</title>
</head>
<body>
    <div class="flex">
        <?php include_once('blocks/header.php'); ?>
    
        <div class="content">
            <div class="wrap">
                <h1 class="content__heading">Корзина</h1>
                <div class="cart-wrap">
                    <section class="cart__goods">
                        <?php include_once('cartview.php'); ?>
                    </section>
                    <section class="cart__form">
                    <?php if($_SESSION['login']){?>
                        <h2 class="form__heading">Оформить заказ</h2>    
                        <?php if($_GET['succses'] == "true"){
                            echo "<p class='succses'>Спасибо за покупку!<br>Ваш заказ отправлен на обработку администраторам. Ожидайте обратной связи в течении 24 часов.</p>";
                        }elseif($_GET['succses'] == "false"){
                            echo "<p class='error'>Невозможно оформить заказ. Ваша корзина пуста!</p>";
                        }
                        ?>
                        <form action="orders.php" method="post">
                            <p>ФИО </p>
                            <input name="name" type="text" required>
                            <p>Адрес доставки</p>
                            <textarea name="adress" cols="50" rows="3" required></textarea>
                            <p>Почтовый индекс</p>
                            <input name="postcode" type="text" required>
                            <p>Промо код</p>
                            <input name="promo" type="text">
                            <p>Телефон</p>
                            <input name="tel" type="telephone" required>
                            <p>E-mail</p>
                            <input name="email" type="email" required>
                            <h3 class="fullprice">Цена: <?= $fullPrice; ?> &#8381;</h3>
                            <input type="hidden" name="fullPrice" value="<?= $fullPrice ?>">
                            <input type="submit" value="Оформить">
                        </form>  
                    <?php
                    }
                    ?>    
                    </section>
                </div>
            </div>
        </div>

        <?php include_once('blocks/footer.php'); ?>    
    </div>
</body>
</html>