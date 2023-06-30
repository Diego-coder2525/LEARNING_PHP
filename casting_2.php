<?php
//strict types <- no dinamic parsing
//recommended
declare(strict_types=1);
$x = (int) '5';
echo $x;
//sum($x,$y)
//type juggling
function sum(float $x,float $y){
    //var_dump accepts multiple parameters
    var_dump($x,$y);
    echo "<br>";
    return $x+$y;
}
$sum = sum(4,'5');
echo sum(3,'7')."<br>".$sum;
echo "<br>";
echo PHP_VERSION."<br>";
