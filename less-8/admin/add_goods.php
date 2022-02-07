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
        
                <form method="post" action="core_goods.php" enctype="multipart/form-data">
                    <p><strong>Добавить товар:</strong></p>
                    <p>Введите наименование: <br><input type="text" name="name" maxlength="100" required></p>
                    <p>Введите описание: <br><textarea name="short_info" rows="10" required></textarea></p>
                    <p>Введите описание: <br><textarea name="full_info" rows="10" required></textarea></p>
                    <p>Введите цену: <br><input type="number" name="price" maxlength="20" required></p>
                    <p><strong>Загрузите картинку в формате JPEG, PNG или GIF</strong></p>
                    <p><input type="file" name="img" accept="image/jpeg,image/png,image/gif" required></p>
                    <p><input type="submit" name="submit"></p>
                </form>
            </div>
        </div>

        <?php include_once('../blocks/footer.php'); ?>    
    </div>
</body>
</html>