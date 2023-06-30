<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    <?= "Embbeding php" ?>
</h1>
<!--NOT GOOD IDEA MIXING HTML WITH PHP-->
<?php
    // comment
    # comment
    /*
    multiline comment
    */
    $variable = 'variable';
    $x = 'concated';
    //constant
    define('CONSTANT','constant');
    define('CONST_'.$x,$variable);
    const CONST_KEYWORD = 'constant_word';
    //define('CONSTANT','constantchanged');
    //constants cannot change
    //MAIN DIFERENCE between const and define ->
    //const is defined at compile time
    //define is defined at run time

    if(true){
        // const TRYOUT = "tryout";
        define('TRYOUT','tryout');
    }
    //variable variables
    $age = 'old';
    //$ <- indicates a variable definition then using value of
    //the variable to assign its name with other $(variable)
    $$age = 'older';

    echo $age,$old;

    // ${} = {$}
    echo '<p>'."print: ${variable}".'</p>';
    echo '<p>'."print2: ".CONSTANT.'</p>';
    echo CONST_KEYWORD."<br>";
    echo CONST_concated."<br>";
    //check if a constant is declared
    echo defined('CONSTANT');
    //predefined constants -> PHP..
    echo PHP_VERSION."<br>";
    //magic constants
    echo __LINE__."<br>";;
    echo __FILE__;
?>
</body>
</html>