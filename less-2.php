<?php
//-----------------1--------------
    // $a = rand(-10,10);
    // $b = rand(-10,10);

    // if($a >= 0 && $b >= 0){
    //     echo $a - $b;
    // }
    // elseif($a < 0 && $b < 0){
    //     echo $a * $b;
    // }
    // elseif($a >= 0 && $b < 0 || $a < 0 && $b >=0 ){
    //     echo $a + $b;
    // }

//-----------------2.1--------------
    //$a = rand(0,15); 
    // switch($a){
    //     case 0:
    //         echo '0 ';
    //     case 1:
    //         echo '1 ';
    //     case 2:
    //         echo '2 ';
    //     case 3:
    //         echo '3 ';
    //     case 4:
    //         echo '4 ';
    //     case 5:
    //         echo '5 ';
    //     case 6:
    //         echo '6 ';
    //     case 7:
    //         echo '7 ';
    //     case 8:
    //         echo '8 ';
    //     case 9:
    //         echo '9 ';
    //     case 10:
    //         echo '10 ';
    //     case 11:
    //         echo '11 ';
    //     case 12:
    //         echo '12 ';
    //     case 13:
    //         echo '13 ';
    //     case 14:
    //         echo '14 ';
    //     case 15:
    //         echo '15';
    //         break;
    //     default:
    //         echo "Неверный параметр";
    // }
//-----------------2.2--------------    
    // function Numbers($a){
    //     if($a > 15){
    //         return;
    //     }
    //     echo $a." ";
    //     Numbers($a+1);
    // }            
    // Numbers($a);

//-----------------3--------------
// $a = 6;
// $b = 2;
// function sum($a,$b){
//     return $a + $b;
// }
// function minus($a,$b){
//     return $a - $b;
// }
// function multiply($a,$b){
//     return $a * $b;
// }
// function share($a,$b){
//     return $a / $b;
// }

// echo "Сумма: ".sum($a,$b)."<br>";
// echo "Вычитание: ".minus($a,$b)."<br>";
// echo "Умножение: ".multiply($a,$b)."<br>";
// echo "Деление: ".share($a,$b)."<br>";

//-----------------4--------------
// function mathOperation($arg1, $arg2, $operation){
//     switch($operation){
//         case '+':
//             echo sum($arg1,$arg2);
//             break;
//         case '-':
//             echo minus($arg1,$arg2);
//             break;
//         case '*':
//             echo multiply($arg1,$arg2);
//             break;
//         case '/':
//             echo share($arg1,$arg2);
//             break;
//         default:
//             echo 'Неверные параметры';
//     }
// }
// mathOperation(2,3,'+');

//-----------------6--------------

// function power($val, $pow) {
//     if($pow == 0) return 1;
//     else {
//     return $val * power($val, $pow-1);      
//     };   
// }; 
// echo power(2, 3);

//-----------------7--------------
// function timer(){
//     $timeHourse = date("H");
//     $timeMinutes = date("i");
//     if($timeHourse == 1 || $timeHourse === 21){
//        echo $timeHourse." Час "; 
//     }
//     elseif($timeHourse >= 2 && $timeHourse <= 4 || $timeHourse > 21){
//         echo $timeHourse." Часа ";
//     }
//     else{
//         echo $timeHourse." Часов ";
//     }
//     if($timeMinutes == 1 || $timeMinutes == 21 || $timeMinutes == 31 || $timeMinutes == 41 || $timeMinutes == 51){
//         echo $timeMinutes." Минута"; 
//     }
//     elseif($timeMinutes >=2 && $timeMinutes <= 4 || $timeMinutes >=22 && $timeMinutes <= 24 || $timeMinutes >=32 && $timeMinutes <= 34 || $timeMinutes >=42 && $timeMinutes <= 44 || $timeMinutes >=52 && $timeMinutes <= 54){
//         echo $timeMinutes." Минуты"; 
//     }else{
//         echo $timeMinutes." Минут"; 
//     }
// }
// timer();
?>