<?php
/*
 *  - মূল অ্যারে ঠিক রেখে অ্যারে থেকে কিছু ডেটা এক্সট্রাক্ট করা
 *  array_slice() with indexed array & Associative Array
 *  -1 last porjonto
 */

$fruits=['Apple','Banana','Apricot','Avocados','Blueberry','Blackcurrant'];

$random=['a'=>12,'b'=>13,'c'=>14,'d'=>15,'e'=>16,17,18,19=>20];

//$someFruits=array_slice($fruits,2);
//$someFruits=array_slice($fruits,2,2);
//$someFruits=array_slice($fruits,2,-1);
//$someFruits=array_slice($fruits,-5,-1);
/*
$someFruits=array_slice($fruits,-5,-1,true);
print_r($someFruits);
*/

//$someRandom=array_slice($random,4);
$someRandom=array_slice($random,4,null,true);
print_r($someRandom);


/*

 Array
(
    [e] => 16
    [0] => 17
    [1] => 18
    [2] => 20
)
  */


/*
 * Array
(
    [e] => 16
    [0] => 17
    [1] => 18
    [19] => 20
)
 */
