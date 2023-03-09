<?php
/*
 *  - স্ট্রিং রিভার্স করা
 */


$string="Hello World";
$length=strlen($string)-1;


for ($i=$length;$i>=0;$i--){
    echo $string[$i];
}

echo "\n";

// dlroW olleH

$length=strlen($string);
for ($i=1;$i<=$length;$i++){
    echo $string[$i*-1];
}

// dlroW olleH

echo "\n";

echo strrev($string);