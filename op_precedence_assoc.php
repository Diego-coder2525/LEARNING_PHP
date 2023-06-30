<?php

// https://www.php.net/manual/en/language.operators.precedence.php
// () <- clarity and explicit
$x = 5 + 3 * 5;
$y = $x = 7;
$z = ($x and $y);
//$z = $x and $y; <- $z = 7
echo $x;
var_dump($z);