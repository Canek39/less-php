<?php
function mathOperation($a, $b, $action){
    switch($action){
        case 'sum':
            return $a + $b;
        case 'sub':
            return $a - $b;
        case 'mult':
            return $a * $b;
        case 'share':
            if($b != 0 ){
                return $a / $b;
            }else{
                return "Делить на ноль НЕЛЬЗЯ!!!";
            }
        default:
            echo 'Неверные параметры';
    }
}

if(is_numeric($_POST["numb1"]) && is_numeric($_POST["numb2"])){
    $a = $_POST["numb1"];
    $b = $_POST['numb2'];
    $action = $_POST['action'];

    $answer = mathOperation($a, $b, $action);
    header("Location: index.php?answer=$answer");
}else{
    $answer = "Введите число.";
    header("Location: index.php?answer=$answer");
}



?>