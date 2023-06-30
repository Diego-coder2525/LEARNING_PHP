<?php

//while
$i = 0;
while(true){
    while($i==5){
        break 2; // <-- indicates de amount of while loops that will be broken, default set to 1
        // continue <- continue to the next iteration and ignores the rest
    }
    echo $i;
    $i++;
}
// while(sentence):
// ****
// ****
// endwhile;

//do-while
do{
    echo "Hello";
}while($i<5);

//for(start;loop;condition to end)
$text = ['a','b','c'];
$length = count($text);
//or for($i = 0, $length = count($text) ;$i<....){}
for($i = 0;print $i,$i < 15;$i++){ // not allowed echo to print
    // echo $i;
}
echo "<br>";

//foreach
//$item will remain after foreach is complete, it exists
//& <- assign the items in foreach, reference, if not it will not change
foreach ($text as $key => &$item) {
    $item = "php";
    echo $key.": ".$item."<br>";
}

//unset <- recommended
//$item = "changed" <- reference array's last item
print_r($text);
echo $item;
echo "<br>";

$user = [
    'name'=>'Diego',
    'email'=>'Diego@gmail.com',
    'skills'=>['java','mysql','php','c#']
];


//foreach(...):   for(...):

//endforeach;      endfor;
foreach($user as $key => $value) {
    //USUALLY FOR ARRAYS V
    //if(is_array($value)){
    //   $value = implode($value);
    //}
    //OR
    //if(is_array($value)){
    //    foreach ($value as $skill){
    //        echo $skill . " - ";
    //    }
    //}
    echo $key .  ": " . json_encode($value) . "<br>";
}


