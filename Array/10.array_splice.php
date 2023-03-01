<?php
/*
 *  - অ্যারেকে কাটাকাটি করা
 *  array_splice() with indexed array & Associative Array
 *  - original array ke modify korey
 *  - new array push kora jai
 *  -1 last porjonto
 */

$fruits=['Apple','Banana','Apricot','Avocados','Blueberry','Blackcurrant'];
$random=['a'=>12,'b'=>13,'c'=>14,'d'=>15,'e'=>16,17,18,19=>20];

$newFruits=['Cucumber', 'Celery', 'Greens', 'Carrot'];
//$someFruits=array_splice($fruits,2);
//$someFruits=array_splice($fruits,2,-1);
//$someFruits=array_splice($fruits,-5,-1);
$someFruits=array_splice($fruits,3,-1,$newFruits);

print_r($someFruits);
print_r($fruits);


