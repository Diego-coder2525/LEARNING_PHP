<?php
$array = ['a' => 1,'b'=>null];

var_dump(array_key_exists('b',$array));
// main diference array_key_exits will tell you if the key exists and isset too but if it is not null
var_dump(isset($array['b']));