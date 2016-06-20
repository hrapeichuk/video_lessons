<?php
$string = "Это строковая переменная";
$int = 45;
$float = 5.83;
define("CONSTANTA", 111);
$int_8 = 062;
$int_16 = 0x32;
echo $string."<br>";
echo "Это целочисленная переменная ".$int."<br>";
echo "Это дробная переменная ".$float."<br>";
echo "Это константа ".CONSTANTA."<br>";
echo "Это восьмиричная переменная ".$int_8."<br>";
echo "Это шестнадцатиричная переменная ".$int_16."<br><br><br>";

echo "Заключаем переменные в двойные кавычки <br>";
echo "$string"."<br>";
echo "Это целочисленная переменная "."$int"."<br>";
echo "Это дробная переменная "."$float"."<br>";
echo "Это константа ".CONSTANTA."<br>";
echo "Это восьмиричная переменная "."$int_8"."<br>";
echo "Это шестнадцатиричная переменная "."$int_16"."<br><br><br>";

echo "Заключаем переменные в одинарные кавычки <br>";
echo '$string'."<br>";
echo "Это целочисленная переменная ".'$int'."<br>";
echo "Это дробная переменная ".'$float'."<br>";
echo "Это константа ".CONSTANTA."<br>";
echo "Это восьмиричная переменная ".'$int_8'."<br>";
echo "Это шестнадцатиричная переменная ".'$int_16'."<br><br><br>";

echo 010; echo 011; echo 012; echo 013; echo 014; echo 015; echo 016; echo 017; /*echo 018; echo 019;*/ echo 020;

echo "<br><br>";

for($i=0; $i<22; $i++){
    echo dechex("$i")."  ";
    if($i==9){
        $i=15;
    }
}
echo "<br><br>";

$string1 = "\"Я помню чудное мгновенье:";
$string2 = "Передо мной явилась ты,";
$string3 = "Как мимолетное виденье,";
$string4 = "Как гений чистой красоты.\"";
$author = "А.С. Пушкин";
echo $string1."<br>";
echo $string2."<br>";
echo $string3."<br>";
echo $string4."<br>";
echo "<i>".$author."</i><br><br>";

echo "\"Я помню чудное мгновенье:"."<br>"."Передо мной явилась ты,"."<br>"."Как мимолетное виденье,"."<br>".
    "Как гений чистой красоты.\""."<br>"."<i>"."А.С. Пушкин"."</i><br><br>";

$number = 10;
$hello = "hello";
echo $hello + $number."<br><br>";

echo 0 xor 0; //если оба операнда равны, но 0
echo 0 xor 1;
echo 1 xor 0;
echo 1 xor 1;