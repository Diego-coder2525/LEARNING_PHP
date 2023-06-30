<?php

// $x = null;
$x = null;
echo var_dump($x); // is_null , === comparison operator
//echo var_dump($y); // is_null

// destroys a variable
unset($x);
var_dump($x);
//
var_dump((int)$x);
var_dump((array)$x);
var_dump((string)$x);
var_dump((bool)$x);