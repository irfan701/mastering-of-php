<?php
/*
 * explode() = string to array transform
 * join() =Array to string transform
 * preg_split = for multiple delimiter
 */

$fruits='Apple, Banana, Apricot, Avocados, Blueberry';
$strFruitsToArr=explode(', ',$fruits);
var_dump($strFruitsToArr);
echo $strFruitsToArr[0];
echo "\n";
echo count($strFruitsToArr);
echo "\n";


$ArrFruitsToStr=join(', ',$strFruitsToArr);
echo $ArrFruitsToStr;



$vegetables=preg_split('/( , |,)/','Cucumber, Celery, Greens, Carrot, Capsicum, Onion, Beetroot, Garlic');
print_r($vegetables);