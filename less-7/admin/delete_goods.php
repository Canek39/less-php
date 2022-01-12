<?php
include_once "db_goods.php";
if($_GET[id]){
    $id= $_GET[id];
    goods_delete($connect, $id);
    header("Location: index.php");
}