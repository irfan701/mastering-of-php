<?php
/*
 *
 *  - স্ট্রিংকে ভেঙে টুকরো টুকরো করা -
 */
$string="Hello World,World How Are You!";

$parts=explode(' ',$string);
print_r($parts);

$original=join(' ',$parts);
echo $original;

//$parts2=str_split($string);
//print_r($parts2);

$parts3=preg_split("/\s|,/",$string);
print_r($parts3);

