<?php
/*
 *  - অ্যারের ইউটিলিটি ফাংশনস - খুবই জরুরী - অ্যারে রিডিউস
 * 
 * array_reduce
 */

$numbers=[1,2,3,4];
function sum($oldValue,$currentValue){
    return $oldValue+$currentValue;
}

$sum=array_reduce($numbers,'sum');
echo $sum;

/*
 * sum(0,1) //1
 * sum(1,2) //3
 * sum(3,3) //6
 * sum(6,4)//10
 *
 */