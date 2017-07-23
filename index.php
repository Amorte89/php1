<?php
// задание 1

$c = 3;
$b = 5;

if ($c >= 0 & $b >= 0) {

    echo $c-$b.'<br>';}

    elseif ($c < 0 & $b < 0) {

    echo $c*$b.'<br>';}

    elseif ($c >= 0 & $b < 0 ^ $c < 0 & $b >= 0) {

    echo $c+$b.'<br>';}

// задание 2

$c = 3;
switch ($c)
{
    case 0:
        echo 0;
    case 1:
        echo 1;
    case 2:
        echo 2 ;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5 ;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
    case 10:
        echo 10;
    case 11:
        echo 11;
    case 12:
        echo 12;
    case 13:
        echo 13;
    case 14:
        echo 14;
    case 15:
        echo 15;
};
echo '<br>';

// задание 3

$arg1 = 4;
$arg2 = 5;

function sum($arg1, $arg2) {
    return ($arg1 + $arg2);
};

function sub($arg1, $arg2) {
    return ($arg1 - $arg2);
};

function mul($arg1, $arg2) {
    return ($arg1 * $arg2);
};

function del($arg1, $arg2) {
    return ($arg1 / $arg2);
};

echo sum(4,5).'<br>';
echo sub(4,5).'<br>';
echo mul(4,5).'<br>';
echo del(4,5).'<br>';

// задание 4


function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
        case "sum":
            $operation = sum($arg1, $arg2);
            break;
        case "sub":
            $operation = sub($arg1, $arg2);
            break;
        case "mul":
            $operation = mul($arg1, $arg2);
            break;
        case "del":
            $operation = del($arg1, $arg2);
            break;
        }

return $operation;

}

echo mathOperation(4,5,"del");

// задание 5 в файле date.php

// задание 6

function power($val, $pow){
    if($pow == 0){
        return 1;
    }
    elseif ($pow < 0) {echo "Отрицательная степень!";
    }
    else {
        return $val * power($val, $pow-1);}
}

echo power(3,2)."<br>";

// задание 7. Честно признаюсь - нашел в интернете функцию - немного её исправил и готово :) Надеюсь сможете объяснить как return работает на уроке, ибо я не совсем врубился.

function worldTime($num,$period){

$numret = $num;
        $hour = array("час","часа","часов");
        $min = array("минуту","минуты","минут");
        if ($period=='hour') $titles = $hour;
        if ($period=='min') $titles = $min;
        $cases = array (2, 0, 1, 1, 1, 2);
        return $numret." ".$titles[ ($num%100>4 && $num%100<20)? 2 : $cases[min($num%10, 5)] ];

    }

$num = date("G", time());
    echo worldTime($num,'hour')." ";
$num = date("i", time());
    echo worldTime($num,'min')." ";