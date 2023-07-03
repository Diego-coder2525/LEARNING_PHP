<?php

// @ before function to suppress errors <- not recommended

// var_dump($file);

if(!file_exists("file.txt")){
    echo "File not found";
    return;
}

$file = fopen("file.txt","r");

while(($line = fgets($file))!==false){
    echo $line . "<br>";
}

fclose($file);

//fgetcsv,file_get_contents,file_put_contents,unlink,copy,rename