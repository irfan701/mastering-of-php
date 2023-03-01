<?php
/*
 *
 * - কয়েকটি অ্যারে কে একসাথে যোগ করা (খুবই ইম্পর্ট্যান্ট)
 *  array_merge()
 */

$fruits=['Apple','Banana','Apricot','Avocados','Blueberry','Blackcurrant'];

$random=['a'=>12,'b'=>13,'c'=>14,'d'=>15,'e'=>16,17,18,19=>20];

//$someFruits1=array_slice($fruits,0,3);
//$someFruits2=array_slice($fruits,3,null,true);
//
//$newFruits=array_merge($someFruits1,$someFruits2);
//$newFruitsPlus=$someFruits1+$someFruits2;
//
//print_r($someFruits1);
//print_r($someFruits2);
//print_r($newFruits);
//print_r($newFruitsPlus);
//
//
//$randomData=array_splice($random,2,2,["g"=>2002,"h"=>2003,"i"=>2005]);
//print_r($randomData); //Not Good Way;There is no preserve actual key  in offset/index
//print_r($random);
//OR

$r1=array_slice($random,0,2,true);
$r2=array_slice($random,4,null,true);
$r3=["g"=>2002,"h"=>2003,"i"=>2005];

$randomDataCorrectWay=$r1+$r2+$r3;
print_r($r1);
print_r($r2);
print_r($r3);


print_r($randomDataCorrectWay);
