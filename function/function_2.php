<?php

declare(strict_types=1);
/*
function func(int $x, int|float $y)
{
    return $x * $y;
}
*/
// &$x <- indicates passing the variable like a reference, it can change the original value
// int|float &$x
function func(int|float $x, int|float $y, float ...$numbers) : int | float// <- () : return_type {}
{
    $x -= 3;
    var_dump($x,$y);
    var_dump($numbers);
    //array_sum
    return $x * $y;
}
$x = 6; // <- affected by &$x
echo func($x,4.5,4,5,7); // makes the change
echo "<br>";
var_dump($x);

//unpacking
$numbers = [1,2,3];
echo func($x,5,...$numbers);
echo func($x,y:6);

// correspond the name of the key with the arguments in function -> 'x' => func($x,...)
$arr = ['y'=>2,'x' => 1];
echo func(...$arr);