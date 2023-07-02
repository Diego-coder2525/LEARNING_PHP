<?php

function sum(int|float ...$numbers) : int|float {
    return array_sum($numbers);
}

//global value
$y = 1;

//anonymous function
$rest = function (int|float ...$numbers) use($y) : int|float {
    // $y will not change globally, but it can change if references with &$y
    $y = 2;
    // printing $y with its value changed -> 2
    echo $y;
    //
    echo "<br>";
    return array_sum($numbers);
};
// function has to be declared
$x = 'sum';

if(is_callable($x)){
    echo $x(1,3,5,7);
    echo "<br>";
    echo $rest(1,3,5,7);
    echo "<br>";
    echo $y;
    echo "<br>";
}else {
    echo "Not callable";
    echo "<br>";
}

//


