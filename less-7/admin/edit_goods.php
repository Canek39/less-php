<?php
session_start();
include_once "db_goods.php";
if($_GET[id]){
    $id= (int)($_GET[id]);
    $good = goods_get($connect, $id);
}

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
                <form method="post" action="core_goods.php" enctype="multipart/form-data">
                    <p><strong>Добавить товар:</strong></p>
                    <p>наименование: <br><input type="text" name="name" maxlength="100" value="<?=$good[title]?>"></p>
                    <p>описание: <br><textarea name="short_info" rows="10"><?=$good[short_info]?></textarea></p>
                    <p>описание: <br><textarea name="full_info" rows="10"><?=$good[full_info]?></textarea></p>
                    <p>цена: <br><input type="number" name="price" maxlength="20" value="<?=$good[price]?>" ></p>
                    <p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
                    <p><img src="../img/<?=$good[img]?>" width="200"></p>
                    <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif"></p>
                    <input type="hidden" name="src" value="<?=$good[img]?>">
                    <input type="hidden" name="edit" value="<?=$good[id]?>">
                    <p><input type="submit" name="submit"></p>
                </form>
            </div>
        </div>

        <?php include_once('../blocks/footer.php'); ?>    
    </div>
</body>
</html>
