<?php

//задание 1

$a=0;
while($a++ < 100) if($a%3 == 0)
    echo $a.'<br>';


//задание 2

$c=0;
$d=10;

function num($c)
{
    if ($c == 0)
        echo "$c" . ' - это ноль<br>' ;
    elseif ($c % 2 != 0)
        echo "$c" . ' - нечетное число<br>';
    elseif ($c % 2 == 0)
        echo "$c" . ' - четное число<br>';

}

do
{
    num($c);
    $c++;
} while ($c <= $d);


// задание 3

$reg = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'],
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск'],
        'Липецкая Область' => ['Данков', 'Задонск', 'Лебедянь'],
        'Курская Область' => ['Курск', 'Курчатов', 'Льгов'],
        'Кемеровская Область' => ['Осинники', 'Прокопьевск', 'Мыски']];
foreach ($reg as $key => $value) {
    echo '<br>'.$key.':<br>';
    foreach ($value as $key => $value) {
        echo $value.'<br>';
    }
}

// задание 8

echo '<br>';
foreach ($reg as $key => $value) {
    echo '<br>'.$key.':<br>';
    foreach ($value as $key => $value) {
        if(mb_substr($value, 0, 1) == 'К') {
            echo $value.'<br>';
        }
    }
}

// задание 4
$str = "привет мир!";

function translit($string) {

$alphabet = [ 'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];

    return strtr($string, $alphabet);}

function str2url($str) {
    $str = translit($str);
    return $str;
}

echo translit($str).'<br>';

// задание 5

$string = 'моя строка с разделителями';
$arrayDelim = explode(' ', $string);
$gluedString = join('_', $arrayDelim);
echo $gluedString.'<br>';

// задание 6 в файле data.php

// задание 7

for ($n = 0; $n < 10; print $n++) {};

// задание 9


