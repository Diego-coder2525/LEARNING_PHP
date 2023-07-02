<?php

//scope delimited by the context

$x = 5;
$y = 12;
function foo(){
    //we should avoid using this, 'cause it makes the code harder to read and maintain
    global $x; // if not declared there is no $x inside foo
    $GLOBALS['y'] = 15;

    $x = 10;

    echo $x,$GLOBALS['y'];
}
foo();
echo "<br>";
foo();


function getValue(){
    //static for maintain value of $value
    static $value = null;

    if($value === null){
        $value = someExpensiveFunction();
    }
    return $value;
}
function someExpensiveFunction(){
    sleep(3);
    echo "Processing..."."<br>";
    return 10;
}

echo(getValue());
echo(getValue());
echo(getValue());