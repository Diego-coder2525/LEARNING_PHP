<?php

// it is possible to define your own keys/indexes
$array = ['a1','a2','a3'];
/*
$oldArray = array('oa1','oa2');
echo var_dump($array);
echo "<br>";
echo var_dump($oldArray);
echo "<br>";
echo $array[1]; // $array[i]
echo $array[-2];
// isset <- if something exists
var_dump(isset($array[4]));
var_dump(isset($array[2]));
echo "<br>";
$array[1]="a2_changed";
echo $array[1];
echo "<br>";
echo "<pre>";
print_r($array);
echo "</pre>";
echo count($array);
echo "<br>";

//mutating array
$array[] = "pushed_1";
print_r($array);
echo "<br>";
array_push($array,"pushed_2");
print_r($array);
echo "<br>";
*/
var_dump($array['first_own_key']);

$array_own_keys = [
    'first_own_key' => '1.0.1',
    'mouse' => 'razer'
];
$array_own_keys['keyboard']='razer too';
echo "<pre>";
print_r($array_own_keys);
echo  "</pre>";

//like a json
$array_multidimensional = [
    "albion" => [
        "type" => "mmorpg",
        "age" => "a few years",
        "alive?" => "definitely dead game",
        "joke" => "yes :D",
        "update?" => [
            // standard declaration w/o explicit indexes
            ["initial" => 1.0, "releaseDateAgo" => 6],
            ["continue" => "yes"],
        ],
    ],
    "lol" =>[
        "type" => "moba",
        "age" => "more than a decade",
        "alive?" => "i think so",
        "joke" => "i hope so D:",
        "versions" => [
            ["version" => 1.0, "releaseDateAgo" => 12],
            ["version" => "never ends -> league is forever"]
        ],
    ],
];
echo "<pre>";
print_r($array_multidimensional);
echo "</pre>";
echo var_dump($array_multidimensional["lol"]["versions"][1]);
echo "<br>";
echo $array_multidimensional["lol"]["joke"];
echo "<br>";

$array_overwrite = [true => 'a', 1 => 'b',1=>'c', 1.5 => 'eso', null => 'empty'];
//overwrite index
$array_overwrite_2 = ['a','b',40=>'c','d'];
//deletes last element of an array and returns it
echo array_pop($array_overwrite_2);
echo "<br>";
//for te first
echo array_shift($array_overwrite_2);
echo "<br>";
print_r($array_overwrite_2);
echo "<br>";
//array will not be re indexed when deleting by index
$array_index = ['a1','b2','c3'];

unset($array_index[1]);
print_r($array_index);

unset($array_index[0],$array_index[2]);
$array_index[] = 4;
print_r($array_index);

echo "<br>";
//
print_r($array_overwrite);
echo $array_overwrite[null];
echo "<br>";
print_r($array_overwrite_2);
//
