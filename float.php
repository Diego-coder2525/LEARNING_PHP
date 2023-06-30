<?php

$x = 13.4e3;
//this is like 7.999999999999999 and floor just remove decimals -> 7
$y = floor((0.1 + 0.7) * 10);
//ceil rounds number to up whenever there is an extra decimal
$w = ceil((0.1 + 0.7) * 10);
//this is like 3.0000000000000004 so basically never trust on rounding for the last digit
$z = ceil((0.1+0.2)*10);
//
$f1 = 0.25;
$f2 = 1-0.75;
var_dump($f1,$f2);
//not recommended comparing floats with ==
if($f1 == $f2){
    echo "yes<br>";
}else{
    echo "no<br>";
}
echo (PHP_FLOAT_MAX * 2)."<br>";
// NAN <- not a number - log(-1)
// INF <- something over bounds / infinite



//echo $x;
//echo PHP_FLOAT_MAX;
echo $y," ",$w," ",$z;