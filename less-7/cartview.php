<?php
    if(!$_SESSION['login']){?>    
        Для просмотра корзины нужно авторизоваться или <a href="registration.php">зарегистрироваться</a>    
    <?php return;
    }
    $sql = "SELECT * FROM goods INNER JOIN cart ON goods.id = cart.good_id AND cart.user_id =".$_SESSION['userid'];
    $res = mysqli_query($connect, $sql);
    $fullPrice = 0;
    if(mysqli_num_rows($res)){
        while($data = mysqli_fetch_assoc($res)){?>
            <form action="funccart.php" method="post">
                <div class="goods goods-cart">
                    <a class="goods_img" href="good.php?id=<?= $data['good_id'] ?>">
                        <img  src="img/<?= $data['img']; ?>" alt="">
                    </a>
                    <div class="goods__info">
                        <h2 class="info-heading"><?= $data['title']; ?></h2>
                        <p class="info-desc"><?= $data['short_info']; ?></p>
                        <p class="info-count">
                            Количество: 
                            <input style="width:50px" type="number" name="count" value="<?= $data['count']; ?>" readonly >
                        </p>
                        <h3 class="info-price">Цена: <?= $data['price']*$data['count']; ?> &#8381;</h3>
                    </div>
                    <input class="hidden" type="hidden" name="good_id" value="<?= $data['good_id']; ?>">
                    <input class="goods-btn" name="delete" type="submit" value="Удалить">
                </div>
            </form>
        <?php 
        $fullPrice += $data['price']*$data['count'];
        }
    }else{
        echo "В корзине нет товаров!";
    }
?>