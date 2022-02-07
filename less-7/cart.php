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
                    <?php if($_SESSION['login']):?>
                        <h2 class="form__heading">Оформить заказ</h2>    
                        <form >
                            <h3 class="fullprice">Цена: <?= $fullPrice; ?> &#8381;</h3>
                            <input type="submit" value="Оформить">
                        </form>  
                    <?php
                    endif
                    ?>    
                    </section>
                </div>
            </div>
        </div>

        <?php include_once('blocks/footer.php'); ?>    
    </div>
</body>
</html>