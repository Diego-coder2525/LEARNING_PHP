<?php
$time = time();

echo $time . "<br>";

echo $time + 7 * 24 * 60 * 60 . "<br>";

echo $time - 1 * 24 * 60 * 60 . "<br>";

// https://www.php.net/manual/es/function.date.php
// time zones indexes : https://www.php.net/manual/en/timezones.php
// all formats for dates
echo date("m/d/Y g:ia") . "<br>"; // <- current time in default time zone
//before 1 day since today
echo date("m/d/Y g:ia",$time - 1 * 24 * 60 * 60 ) . "<br>";
//after 1 week since today
date_default_timezone_set('Etc/GMT+5'); // Peru time zone
echo date("m/d/Y g:ia",$time + 7 * 24 * 60 * 60) . "<br>";
echo date_default_timezone_get() . "<br>";
//changing default time zone
date_default_timezone_set('UTC');
//current time zone
echo date_default_timezone_get() . "<br>";
// mktime returns the time given <- null in year argument for current year
echo date("m/d/Y g:ia",mktime(0,0,0,4,20,2020)) . "<br>";
echo date("m/d/Y g:ia", strtotime("2023-01-18 09:00:00")) . "<br>";
echo date("m/d/Y g:ia", strtotime("last day of january 2023")) . "<br>";
// date_parse - date_parse_from_format
// this is a headache