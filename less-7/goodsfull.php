<?php
if($_GET['id']){
    $id = $_GET['id'];

    $sql = "select * from goods where id = $id";
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);?>

    <div class="fullpost">
        <img class="card_img-full" src="img/<?= $data['img'];?>" alt="text" >
        <div class="card_info-full">
            <h1 class="card_name-full"><?= $data['title'];?></h1>
            <p class="card_price-full">Цена: <?= $data['price'];?> &#8381;</p>
            
            <?php
                if($_SESSION['login']){?>
                    <form action="addcart.php" method="post">
                        <label>Количество: </label>
                        <input class="card_count-full" type="number" name="count" min="1" value="1"><br>
                        <input name="id" type="hidden" value="<?= $id ?>">
                        <input type="submit" class="card_btn" value="Купить">
                    </form>
                <?php
                }else{ ?>
                    <p>
                        Для покупки нужно авторизоваться или
                        <a href="registration.php">Зарегистрироваться</a>
                    </p>
                <?php
                }


            ?>
            <p class="card_text-full"><?= $data['full_info'];?></p>
        </div>
    </div>
    

<?php
}else{?>
    <h1>Неверный индетификатор!</h1>
    <a href="index.php">Вернуться на главную</a>
<?php 
}
?>