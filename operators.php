<?php

// Arithmetics operations -> + - * % **
$xs = '10';
$x = 10.5;
$y = 2.9;
$y0 = 0;
var_dump($x+$y);
echo "<br>";
var_dump($x);
echo "<br>";
//signs converts a convertable string to int in this case
var_dump(-$xs);
echo "<br>";
var_dump($x/$y);
echo "<br>";
//var_dump(fdiv($x/$y0));
echo "<br>";
var_dump(fmod($x,$y)); //they are casting to int -> $x / $y
echo "<br>";
//module takes the sign of the first number -> -10%3 it displays -1 but if 10%-3 it displays 1

// Assignment operators -> = += -= *= %= **= /=

$x =5;
$y = ($z = 10) + 5;

if($x=6){ //assign and evaluate so this is always true
    echo 'is';
    echo '<br>';
}
echo $y;
echo '<br>';


// String operator

$x = "hello";
$x .= "world";
$x = $x.'diego';

echo $x;
echo '<br>';


//Comparison operator == === != < > <= >= <=> ?? ?:
$x = '3';
$y = 3;

var_dump($x == $y); //equivalent or parsable, the same with != and !==
var_dump($x === $y); //strict
var_dump($x <> $y); //strict too
var_dump($x <=> $y); // combine < > and equal where > displays 1;< ,-1;= , 0
var_dump(0 == "hello");
echo "<br>";
$x = "hello";
$y = strpos($x , "h");

$result = $y === false ? "h is not found" : "h found at index ".$y;

echo $result;

echo "<br>";
$bb = null;
$aa = $bb ?? 'hello'; // if $bb is null it asigns hello for its value, if is not just assign the value
var_dump($aa);
/*if($y === false){ // 0 == false => false, because strpos returning index
    echo "no";
}else{
    echo "yes";
    echo "h found at index ".$y;
}*/






