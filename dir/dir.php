<?php

// working with filesystem
// scandir returns array
$dir = scandir(__DIR__); // . current directory, .. parent directory, $.php file

var_dump(is_dir($dir[1]));
//rmdir("directory"); // has to be empty directory
//mkdir("directory/within",recursive: true);
echo file_exists("file.txt");
//filesize,file_put_contents,clearstatcache <- extra functions