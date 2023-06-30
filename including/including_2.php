<?php

// string

ob_start();
include  "./pages/nav.php";
$nav = ob_get_clean();

$nav = str_replace("about","about us",$nav);

var_dump($nav);