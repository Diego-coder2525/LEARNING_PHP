<?php
include "./util/util.php";

$items = ["a"=> 1, "b"=>2,"c"=>3,"d"=>4];
//divides array into chunks -> args($array,length of chunks, true <- preserve indexes)
notEyePain(array_chunk($items,2,true));
//
notEyePain($items);
//combines arrays, keys <- have to have the same number of elements
$array1 = ['e1','e2','e3'];
$array2 = [4,5,6];
notEyePain(array_combine($array1,$array2));
//
$arrayFilter = [1,2,3,4,5,6,7];
$arrayFilteredByPairs = array_filter($arrayFilter,fn($element)=>$element % 2 === 0);
// ARRAY_FILTER_USE_KEY < -filtering by key
// ARRAY_FILTER_USE_BOTH < -filtering by both, fn($element,$key)
//
notEyePain($arrayFilteredByPairs); // not re-indexed
// re indexing <- fallsable values are going to be filtered out while reindexing like false,[],0
$arrayFilteredByPairs = array_values($arrayFilteredByPairs);
notEyePain($arrayFilteredByPairs); // re-indexed

// array_keys,array_map,array_merge,array_reduce(useful),array_search,in_array and more
$array1 = ["a"=>2,"b"=>3,"c"=>4];
$array2 = [4,5,6];
// array_map(callback,$array,...$arrays) <- arrays have to have the same number of elements, or it will be completed with 0's
$array3 = array_map(fn($number1,$number2)=>$number1*$number2,$array1,$array2);
notEyePain($array3);

// asort,ksort,usort