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

<?php
// if, else, elseif, else if
// elseif == else if, but you have to mantain the format in all the others and with html
$age = 60;
?>
<?php if($age < 18):?>
    <p style="color:red">you are -18</p>
<?php elseif(18 < $age && $age < 60):?>
    <p style="color:green">you are +18</p>
<?php elseif($age>=60):?>
    <p style="color:darkgreen">you are +60</p>
<?php endif ?>
</body>
</html>