<?php
    // print returns 1, print doesn't allow concat with commas ->
    // a,x,y,z
    // echo is lighter
    //$name = "Diego";
    //echo "hello ".$name;
    $y = 2;
    //$x = $y dynamic -> whenever $y changes, x$ will change too
    $x = &$y;
    $y = 5;
    echo PHP_VERSION."<br>";
    echo $x." "."->concant {$y}";

?>