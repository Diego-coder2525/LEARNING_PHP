<?php
// lambda <- expression
// closure

//closure must be an anonymous function and callable can be a normal function
$sum = function (callable $callback,int|float ...$numbers) : int|float {
    return $callback(array_sum($numbers));
};

function fu($argument){
    return $argument * 2;
}

//echo $sum(1,5,10);
//we can pass an anonymous function directly too
//php converts functions in instances of closures automatically
echo $sum('fu',1,5,10);
echo "<br>";
echo $sum(function($argument){
    return $argument * 2;
},1,5,10);
echo "<br>";
