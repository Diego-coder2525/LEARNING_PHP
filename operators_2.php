<?php

// Error control operator @ <- not recommended
$x = @file("test.txt");

// ++ --
$x = null; //because null is equivalent to 0
echo ++$x;
echo '<br>';

// logical operators || && ! and or xor <- OPERATOR PRECEDENCE CONCEPT
$x = false;
$y = false;

function hello(){
    echo "HELLO - ";
    return false;
}

var_dump($x && $y);
echo '<br>';
var_dump($x || $y);
echo '<br>';
var_dump($x && hello()); // in this case it has to call hello() to check its value
echo '<br>';
var_dump($x || hello()); // hello() will never run because it already
// knows the value of the sentence because $x = true, it's not necessary to call hello()
echo '<br>';
var_dump($x && hello() || true); // hello() not executed because not needed

// Bitwise Operator & | ^ ~ << >>

// Array Operator + == === != <> !==

// Execution Operators ``

// Type Operators (instanceof)

// Null-safe Operator - PHP8 (?)