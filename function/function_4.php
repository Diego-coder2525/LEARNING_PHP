<?php

// lambda <- expression
// closure
//$sum = function (int|float ...$numbers) : int|float {
//    return array_sum($numbers);
//};
//
//echo $sum(1,5,10);
//echo "<br>";

// callable data type <- callback
$array = [1,2,3,4];

//an_f //array3 using an_f
$anonymous_f = function($array){
    return $array * 2;
};
$array3 = array_map($anonymous_f,$array);

//array2
$array2 = array_map(function($array){
    return $array * 2;
},$array);

//array4 using n_f
function normal_f($array){
    return $array * 2;
}
$array4 = array_map('normal_f',$array);

//print
print_r($array2);
print_r($array3);
print_r($array4);