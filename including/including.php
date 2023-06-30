<?php
/* require / require_once / include / include_once */

// require "file.php"; <- if it is not found, program will fail
// require_once "file.php"; <- only called one time even if there are more calls
// include <- insert code like require but will not fail if file not found
// include_once <- the same as require_once
$x = 5;

$y = include "including_1.php"; // if not found returns false, if found returns true || 1

var_dump($y);