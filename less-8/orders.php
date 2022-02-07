<?php
session_start();
include_once("db.php");

$idUser = $_SESSION['userid'];
$name = $_POST['name'] ? strip_tags($_POST['name']) : "";
$adress = $_POST['adress'] ? strip_tags($_POST['adress']) : "";
$postcode = $_POST['postcode'] ? strip_tags($_POST['postcode']) : "";
$promo = $_POST['promo'] ? strip_tags($_POST['promo']) : "";
$tel = $_POST['tel'] ? strip_tags($_POST['tel']) : "";
$email = $_POST['email'] ? strip_tags($_POST['email']) : "";
$fullPrice = $_POST['fullPrice'];

$sql = "SELECT * FROM goods INNER JOIN cart ON goods.id = cart.good_id AND cart.user_id =".$_SESSION['userid'];
$res = mysqli_query($connect, $sql);
$res2 = mysqli_query($connect, "UPDATE `cart` SET `status`= 2 WHERE user_id =".$_SESSION['userid']);

if(mysqli_num_rows($res)){
    
    $array = [];
    while($data = mysqli_fetch_assoc($res)){
       $result = array("id"=>$data['good_id'], "title"=>$data['title'], "count" => $data['count']);
       array_push($array,$result); 
    
        $obj = json_encode($array, JSON_UNESCAPED_UNICODE);

        $sql = "INSERT INTO orders(`id`, `id_user`, `fio`, `adress`, `postcode`, `phone`, `email`, `product`, `fullprice`, `status`) VALUES (NULL, '$idUser', '$name', '$adress', '$postcode', '$tel', '$email','$obj','$fullPrice', 2)";
        $res = mysqli_query($connect, $sql);
        if($res){
            $sql = "DELETE FROM cart WHERE status = 2 AND user_id =".$_SESSION['userid'];
            $res = mysqli_query($connect, $sql);

            header("Location: /less-8/cart.php?succses=true");
        }
    }
}else{
    header("Location: /less-8/cart.php?succses=false");
}

?>