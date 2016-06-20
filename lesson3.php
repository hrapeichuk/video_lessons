<?php
define("A", 12);
define("B", -8);

$a = A;
$b = B;

if($a >= 0 && $b >= 0){
    echo $a + $b."<br><br>";
}
elseif ($a < 0 && $b < 0){
    echo $a - $b."<br><br>";
}
else{
    echo $a * $b."<br><br>";
}

echo ($a>$b) ? $a."<br><br>" : $b."<br><br>";

$a =5;
switch ($a){
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;
    case 7:
        echo 7;
    case 8:
        echo 8;
    case 9:
        echo 9;
}

function sum($a, $b){
    echo $a + $b."<br><br>";
}

function sub($a, $b){
    echo $a - $b."<br><br>";
}
function mul($a, $b){
    echo $a * $b."<br><br>";
}
function segm($a, $b){
    echo $a / $b."<br><br>";
}
echo "<br><br>";
mul ($a, $b);

function mathOperation ($a, $b, $operation){
    switch ($operation){
        case sum:
            echo $a + $b."<br><br>";
            break;
        case sub:
            echo $a - $b."<br><br>";
            break;
        case mul:
            echo $a * $b."<br><br>";
            break;
        case segm:
            echo $a / $b."<br><br>";
            break;
    }
}
mathOperation ($a, $b, sub);

$a = 3;
function power($a, $pow){
    if ($pow == 0){
        return 1;
    }
    if($pow < 0) {
        return power(1/$a, -$pow);
    }
    return $a *  power($a, $pow-1);
}
echo power($a, 4)."<br><br>";


function mysuperfunc($a, $b)
{
    if ($a + $b > 100){
        return 100;
    }
    else
        return $a + $b;
}
echo mysuperfunc(1, 1)."  ";
echo mysuperfunc(2, 34)."  ";
echo mysuperfunc(2, 99);
