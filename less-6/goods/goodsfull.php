<?php
if(is_numeric($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select * from goods where id = $id";
    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);?>

    <img class="card_img-full" src="img/<?= $data['img'];?>" alt="text" >
    <div class="card_info-full">
        <h1 class="card_name"><?= $data['title'];?></h1>
        <p class="card_text"><?= $data['full_info'];?></p>
        <p class="card_price">Цена: <?= $data['price'];?> &#8381;</p>
    </div>
    <button class="card_btn" >Купить</button>

<?php
}else{?>
    <h1>Неверный индетификатор!</h1>
    <a href="index.php">Вернуться на главную</a>
<?php 
}
?>