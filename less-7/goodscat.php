<?php

$sql = "select * from goods order by id desc";
$res = mysqli_query($connect, $sql);

while($data = mysqli_fetch_assoc($res)):?>
    <div class="goods__card">
        <img class="card_img" src="img/<?= $data['img'];?>" alt="text" >
        <div class="card_info">
            <h2 class="card_name"><?= $data['title'];?></h2>
            <p class="card_text"><?= $data['short_info'];?></p>
            <p class="card_price">Цена: <?= $data['price'];?> &#8381;</p>
        </div>
        <a href="good.php?id=<?= $data['id']; ?>" class="card_link">Подробнее...</a>
    </div>
<?php endwhile;
?>