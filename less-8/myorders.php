<?php
    if(!$_SESSION['userid']){
        return 0;
    }
    
    $sql = "Select * from orders where id_user=".$_SESSION['userid'];
    $result = mysqli_query($connect, $sql);
    
    // function view($array){
    //     foreach ($array as $key => $value){
    //         foreach ($value as $key2 => $value2)
    //         return $array[$key][$key2];    
    //     } 
    // }
    if(mysqli_num_rows($result)){
        
        while($data = mysqli_fetch_assoc($result)){
            $result2 = mysqli_query($connect, 
                "SELECT title FROM status_order INNER JOIN orders ON status_order.id = ".$data['status']." AND orders.id_user =".$_SESSION['userid']);
            $status = mysqli_fetch_assoc($result2)['title'];
            ?>
        
            <div class="orders">
                <p class="orders__number">
                    Номер заказа: <?= $data['id'] ?>
                </p>
                <div class="orders-flex">
                    <?php
                        $array = json_decode($data['product'],true);
                        for($i = 0, $size = count($array); $i < $size; ++$i){
                            $good_id = $array[$i]['id'];
                            $sql2 = "SELECT * FROM orders INNER JOIN goods ON goods.id = '$good_id' AND orders.id_user =".$_SESSION['userid'];
                            $res = mysqli_query($connect,$sql2);
                            $good = mysqli_fetch_assoc($res);
                            
                            // echo $array[$i]['title']."<br>";
                            // echo $array[$i]['count']; ?>
                            
                                <div class="orders-wrap">
                                    <img class="orders__img" src="img/<?= $good['img'] ?>" alt="<?= $good['img'] ?>">
                                    <div class="orders__info">
                                        <div class="info-goods">
                                            <p><?= $good['title'] ?></p>
                                            <p><?= $good['short_info'] ?></p>
                                        </div>
                                    </div>
                                    <div class="info-count">
                                            <p>Колличество: <?= $array[$i]['count']; ?> </p>
                                    </div>
                                </div>
                            
                        <?php } ?>
                        <div class="order__status">
                            <p>Сумма заказа: <?= $data['fullprice']; ?>&#8381;</p>
                            <p>Статус заказа: <?= $status ?></p>
                        </div>
                </div>            
            </div>
        <?php        
        }
        // $obj2 = json_decode($data);
        // echo var_dump($obj2);
        // echo count($obj2);
        // for($i; $i < count($obj2); $i++){
        //     echo $obj2[$i]['title'];
        // }
           
    }
    
    // $data = mysqli_fetch_assoc($result)['product'];
    // $res = json_decode($data);

    // echo $data;
    // foreach($res as $name => $value){
    //     echo $value;
    // }
?>