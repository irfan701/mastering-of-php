<?php

/*
 *  - স্ট্রিংয়ের ভেতরের ক্যারেক্টারগুলোকে অ্যাকসেস করা
 */

$string="Hello World";
//echo $string[0];
//echo "\n";
//echo $string[-1];
echo "\n";
echo substr($string,1,4);
echo "\n";


$string2="Hello World";
$stLength=strlen($string2);
echo substr($string2,$stLength-3);
echo "\n";
echo substr($string2,-3);
echo substr($string2,-7,3);