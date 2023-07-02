<?php

$array = [1,2,3,4];

$x = 5;

$array2 = array_map(fn($number) => $number * 2 + ++$x, $array);

print_r($array2);