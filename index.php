<?php error_reporting(-1);
//Разделить заданный массив А(N) на два массива:
//а) массив положительных и отрицательных элементов;
//б) массив четных и нечетных элементов. 
$A = [1, -7, -4, 9, 8, 23, 17, 22, -199, 7, 4, 3, -20, 6];

$a1 = positive_negative($A);
$a2 = positive_negative($A, -1);
$b1 = chetn_nechetn($A);
$b2 = chetn_nechetn($A, -1);

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
echo("Положительные:<br>");
print_r($a1);
echo("<br>Отрицательные:<br>");
print_r($a2);
echo("<br>Четные:<br>");
print_r($b1);
echo("<br>Нечетные:<br>");
print_r($b2);

function positive_negative($array, $mode = 1){
    $res = [];
    $r = 0;
    for($i = 0; $i < count($array); $i++){
        if($mode > 0){
            if($array[$i] > 0){
                $res[$r] = $array[$i];
                $r++;
            }
        }elseif($mode < 0){
            if($array[$i] < 0){
                $res[$r] = $array[$i];
                $r++;
            }
        }
    }
    return $res;
}

function chetn_nechetn($array, $mode = 1){
    $res = [];
    $r = 0;
    for($i = 0; $i < count($array); $i++){
        if($mode > 0){
            if($array[$i] % 2 == 0){
                $res[$r] = $array[$i];
                $r++;
            }
        }elseif($mode < 0){
            if($array[$i] % 2 != 0){
                $res[$r] = $array[$i];
                $r++;
            }
        }
    }
    return $res;
}
