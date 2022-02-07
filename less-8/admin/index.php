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
                 
                    
                    <section class="goods">
                    
                    <?
                        $goods = goods_all($connect);
                        if($goods){
                            foreach ($goods as $good){?>
                                <div class="goods__card">
                                    <img class="card_img" src="../img/<?= $good['img'];?>" alt="text" >
                                    <div class="card_info">
                                        <h2 class="card_name"><?= $good['title'];?></h2>
                                        <p class="card_text"><?= $good['short_info'];?></p>
                                        <p class="card_price">Цена: <?= $good['price'];?> &#8381;</p>
                                    </div>
                                    <a class="card_link" href="edit_goods.php?id=<?=$good[id]?>" title="Редактировать">Редактировать</a>
                                    <a class="card_link" href="delete_goods.php?id=<?=$good[id]?>" title="Удалить">Удалить</a>
                                </div>
                            <?}
                        }
                    ?>
                    </section>
                 
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