<?php
    function orderSuccses($connect, $idOrder){
        
        $sql = "update orders set status=3 WHERE id = $idOrder";
        $res = mysqli_query($connect, $sql);

        if($res){
            echo "Заказ успешно подтвержден!";
        }
    }
    function orderDelete($connect, $idOrder){
        
        $sql = "DELETE FROM `orders` WHERE id = $idOrder";
        $res = mysqli_query($connect, $sql);

        if($res){
            echo "Заказ успешно удален!";
        }
    }
    $sql = "Select * from orders";
    $res = mysqli_query($connect, $sql);
    
    while($data = mysqli_fetch_assoc($res)){
        $result2 = mysqli_query($connect, 
                "SELECT title FROM status_order INNER JOIN orders ON status_order.id = ".$data['status']);
        $status = mysqli_fetch_assoc($result2)['title'];
        $idOrder = $data['id']; 
        echo "<tr>";
        echo "<td class='id'>".$idOrder."</td>";
        echo "<td class='fio'>".$data['fio']."</td>";
        echo "<td class='adress'>".$data['adress']."</td>";
        echo "<td>".$data['postcode']."</td>";
        echo "<td>".$data['phone']."</td>";
        echo "<td>".$data['email']."</td>";
        $array = json_decode($data['product'],true);
        echo "<td class='product'>";
            for($i = 0, $size = count($array); $i < $size; ++$i){
                $good_id = $array[$i]['id'];
                $sql2 = "SELECT * FROM orders INNER JOIN goods ON goods.id = '$good_id'";
                $res2 = mysqli_query($connect,$sql2);
                $good = mysqli_fetch_assoc($res2);
                echo $good['title']." | ";
                echo $array[$i]['count']."<br>";
            }
        echo "</td>";
        echo "<td>".$data['fullprice']."&#8381;</td>";
        echo "<td>".$status."</td>";?>

        <td>
           <form method="post">
               <input type="submit" name="order_succses" value="Подтвердить">
               <input type="submit" name="order_delete" value="Удалить">
           </form> 
        </td>
        <?php
        echo "</tr>";
        
    }
    if(array_key_exists('order_succses',$_POST)){
        
        orderSuccses($connect, $idOrder);
    }elseif(array_key_exists('order_delete',$_POST)){
        orderDelete($connect, $idOrder);
    }
    
    
?>
