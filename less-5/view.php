<?php
include_once("bd.php");

$id = $_GET['id'];
$count = mysqli_query($connect,"update images set count=count+1 where id=$id");
$sql = "select * from images where id=$id";
$res = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $data['title']; ?></title>
</head>

<body>
    <div class="wrap">
        <div class="gallery">
            <img class="gallery__img-full" src="gallery/full/<?= $data['url'];?>" alt="">
        </div>
        
        <div class="gallery-description">
            <div class="desc-left">
                <h2 >Описание</h2>
                <?= $data['description'];?>
                <p>
                    Размер: <?= $data['size'];?> KB
                </p>
            </div>
            <div class="desc-right">
                <h2>Просмотров: <?= $data['count'];?></h2>
            </div>
        </div>
                
    </div>
</body>

</html>