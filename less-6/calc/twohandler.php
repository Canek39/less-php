<?php

if(is_numeric($_POST["numb1"]) && is_numeric($_POST["numb2"])){
    $a = $_POST['numb1'];
    $b = $_POST['numb2'];

    if($_POST['sum']){
        $answer = $a + $b;
        header("Location: index.php?answer=$answer");
    }elseif($_POST['sub']){
        $answer = $a - $b;
        header("Location: index.php?answer=$answer");
    }elseif($_POST['mult']){
        $answer = $a * $b;
        header("Location: index.php?answer=$answer");
    }else{
        if($b != 0){
            $answer = $a / $b;
            header("Location: index.php?answer=$answer");
        }else{
            $answer = "Делить на ноль НЕЛЬЗЯ!!!";
            header("Location: index.php?answer=$answer");
        }
    }
}else{
    $answer = "Введите число.";
    header("Location: index.php?answer=$answer");
}

?>