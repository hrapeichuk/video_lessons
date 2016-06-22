<?php
$i=0;
while ($i <= 100){
    if($i % 3 == 0){
        echo $i."  ";
    }
    $i++;
}
echo "<br><br>";
$i=0;
do{
    if($i==0){
        echo "0 - это ноль"."<br>";
    }
    elseif($i % 2 == 0){
        echo $i." - это чётное число"."<br>";
    }
    else{
        echo $i." - это нечётное число"."<br>";
    }
    $i++;
} while($i<=10);

echo "<br>";
for ($i=0; $i<10; print ($i++." "))

$cities = array("Москва", "Питер", "Рязань");
echo "<br><br>";
foreach ($cities as $value){
    echo $value." ";
}

$russia  = array(
    "Московская область" => array("Москва", "Зеленоград", "Клин"),
    "Ленинградская область" => array("Санкт-Петербург", "Всеволожск", "Кронштадт"),
    "Рязанская область" => array("Рязань", "Павловск", "Орёл"),);
foreach ($russia as $key => $value) {
    echo "<br>". $key . ": <br>";
    foreach ($value as $city) {
        echo $city . ", ";
    }
}

foreach ($russia as $key => $value) {
    echo "<br>". $key . ": <br>";
    foreach ($value as $city) {
        if (mb_substr($city, 0, 1,"utf-8") == 'К'){
            echo $city . ", ";
         }
    }
}

echo "<br>";
$string = "Эта строка содержит пробелы.";
echo str_replace(" ", "_", $string);

$alphabet = array ("а"=> "a", "б" => "b", "в"=> "v", "г" => "g", "д" => "d", "е" => "e", "ё"=> "yo", "ж" => "j", "з" => "z", "и"=> "i",
    "й" => "yy","к" => "k", "л" => "l", "м"=> "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
    "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "'","ы" => "i", "ь" => "''",
    "э" => "e", "ю" => "yu", "я" => "ya");
echo "<br>";
echo strtr($string,$alphabet);

function myFunction ($text, $alphabet){
    $text = str_replace(" ", "_", $text);
    return strtr($text,$alphabet);
}
echo "<br>";
echo myFunction($string, $alphabet);

