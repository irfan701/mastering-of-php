<?php
/*
 *
 *  - স্ট্রিয়ের ভেতর স্ট্রিং সার্চ এবং রিপ্লেস করা
 */

$string="The simple Rat rat exclaimed, This is amazing news! Friend, lead the way.";

$replacedString=str_replace('simple','SIMPLE',$string,$count); //case sensitive
echo $replacedString;
echo PHP_EOL;

$replacedString1=str_ireplace('rat','cow',$string); //case insensitive
echo $replacedString1;
echo PHP_EOL;
echo "Total Replacement of replacedString : {$count}";
echo PHP_EOL;


$replacedString2=str_replace(['simple','Rat'],['Best','Pencil'],$string,$count); //case sensitive
echo $replacedString2;
echo PHP_EOL;

$replacedString3=str_replace(['simple','Rat'],'Pencil',$string,$count); //case sensitive
echo $replacedString3;

echo PHP_EOL;
echo $string;
