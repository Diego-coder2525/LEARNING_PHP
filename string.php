<?php
$fn = "diego";
$ln = "seminario"; // '' does not allow ${variable} and "" does
$name = $fn." ".$ln;
$name[1] = "C";
$name[15] = "Y"; // add " " when assign something out of bounds and convert to that length -> 16
var_dump($name);
echo $name."<br>";
echo $name[-2]."<br>"; // invert positioning -> g
echo $name[0]."<br>";

// Heredoc <- handling larger and more complex strings that allows variables within it
$text = <<<TEXT
LINE 1 $fn
LINE 2
LINE 3
<div>
    <p>hello world</p>
</div>
TEXT;

$textnl2 = "ASD
ASD
ASD";
echo $text;
echo "<br>";
echo nl2br($text);
echo "<br>";
echo nl2br($textnl2);
echo "<br>";

// Nowdoc <- does not allow variables within it
$textnd = <<<'TEXT'
Line 1 textnd
Line 2 $fn
Line 3
TEXT;

echo nl2br($textnd);

