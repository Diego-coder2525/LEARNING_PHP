<?php

$x = 0b11;
$y = (int) 'test';
$z = 2_000_000; // <- 2000000 , just for readability , it cannot be (int) "2_000_000" <- 2
$w = PHP_INT_MAX + 1; // out of bounds it converts to float
//$y = (int) '4test' <- displays 4
// 0x.. <- hexadecimal
// 0.. <- octane number
// 0b.. <- binaries
// (int) .. <- when .. no contains number it will cast to 0
// (int) false <- 0
// (int) x.yw <- x
// (int) null <- 0
echo $x,$y,"<br>",$w;