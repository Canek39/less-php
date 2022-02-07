<?php


include_once "../db.php";
include_once "db_goods.php";

if($_POST['submit']){
$title = trim(strip_tags($_POST['name']));
$shortInfo = trim(strip_tags($_POST['short_info']));
$fullInfo = trim(strip_tags($_POST['full_info']));
$price = (int)trim(strip_tags($_POST['price']));


require_once "image.php";

$filePath  = $_FILES['img']['tmp_name'];
$fileName  = translate($_FILES['img']['name']);
$type = $_FILES['img']['type'];
$size = $_FILES['img']['size'];

if($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif'){
    if($size>0 and $size<1000000){
        if(copy($filePath,"../".DIR_BIG.$fileName)){
            // image_resize("../".DIR_BIG.$fileName, "../".DIR_SMALL.$fileName, 300, 300);
            if(isset($_POST[edit])){
                $id = (int)trim(strip_tags($_POST['edit']));
                goods_edit($connect, $id, $title, $shortInfo, $fullInfo, $fileName, $price);
                header("Location: index.php");
            }else{
                goods_new($connect, $id, $title, $shortInfo, $fullInfo, $fileName, $price);
                header("Location: index.php");
            }

            $message = "<h3>Файл успешно загружен на сервер</h3>";
        }else{
            $message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
            exit;
        }
    }else{
        $message = "<b>Ошибка - картинка превышает 1 Мб.</b>";
    }
}else{
    $message = "<b>Картинка не подходит по типу! Картинка должна быть в формате JPEG, PNG или GIF</b>";
}
}