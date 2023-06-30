<?php
//not recommended
if(true){
    function sum(){
        return "sum";

    }
}
//function within a function
function rest(){
    echo "rest";
    function recovery(){
        echo "recovery";
    }
}
//function number <- a bit useless w/o strict_types=1
//void,int,...
// function f() : ?int <- nullable values 0 -> null f.e
// multiple return types
function number() : int | float | array{ // mixed <- ambiguous, you can not set ? mixed
    //return 1
    //return []
    return 1.0;
}

var_dump(number());
echo "<br>";
echo sum();
echo "<br>";
// first ->
// recovery(); <- fatal because recovery does not exist at this point
rest();
echo "<br>";
recovery();

