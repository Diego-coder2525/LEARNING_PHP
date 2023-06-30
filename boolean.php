<?php

$isValue = (string) true;

// integer 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

//when you print something in php, it'll try to cast it to string -> true = '1' and false = ''
//(string) $isValue
echo  $isValue;
echo "<br>";
var_dump($isValue);
var_dump(is_bool($isValue));
echo "<br>";

if($isValue){
    echo 'success';
}else{
    echo 'fail';
}