<?php
require_once ("../db.php");
function goods_new($connect, $id, $title, $shortInfo, $fullInfo, $fileName, $price){

//    $test = "test = %s,%s";
//    $demo =sprintf($test,"name","test2");

    $t = "INSERT INTO goods (title, short_info, full_info, img, price) VALUES ('%s','%s','%s','%s','%s')";

    $query = sprintf($t, mysqli_real_escape_string($connect, $title),mysqli_real_escape_string($connect, $shortInfo),mysqli_real_escape_string($connect, $fullInfo),mysqli_real_escape_string($connect, $fileName),mysqli_real_escape_string($connect, $price));

    $result = mysqli_query($connect, $query);

    if(!$result){
        die(mysqli_error($connect));
    }

    return true;
}

function goods_all($connect){
    $query = "SELECT * FROM goods order by id desc";
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

 //   while($data = mysqli_fetch_assoc($result)){
//        $goods[] = $data;
//    }

    $n = mysqli_num_rows($result);
    $goods = [];

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }

    return $goods;
}

function goods_get($connect, $id){
    $query = sprintf("SELECT * FROM goods where id=%d ",(int)$id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

function goods_delete($connect, $id){
    $id = (int)$id;

    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM goods where id='%d'", $id);
    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}

function goods_edit($connect, $id, $title, $shortInfo, $fullInfo, $fileName, $price){
    $id = (int)$id;

    $sql = "UPDATE goods SET title='%s',short_info='%s',full_info='%s',img='%s',price='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $title),mysqli_real_escape_string($connect, $shortInfo),mysqli_real_escape_string($connect, $fullInfo),mysqli_real_escape_string($connect, $fileName),mysqli_real_escape_string($connect, $price),$id);

    $result = mysqli_query($connect, $query);

    if(!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}