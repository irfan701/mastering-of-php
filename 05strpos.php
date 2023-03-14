<?php
/*
 *  - স্ট্রিয়ের ভেতর স্ট্রিং সার্চ করা
 */
$string="The simple rat Rat exclaimed, This is amazing news! Friend, lead the way.";
echo strpos($string,"rat"); //case sensitive
echo "\n";

echo stripos($string,"Rat"); //case insensitive
echo "\n";

echo strripos($string,"Rat"); //case insensitive
echo "\n";



$offset=strpos($string,"The");
if ($offset!==false){   // AS 0 and false ,php te quivalent
    echo "\n Word Was Found\n";
}else{
    echo "\n Word Was not Found\n";
}