<?php
/*
 * - অ্যাসোসিয়েটিভ অ্যারে শাফলিং এর সমস্যা এবং সমাধান
 * array_rand
 */
$fruits=['a'=>'Rambutan','b'=>'Watermelon','f'=>'Apricot','p'=>'Horned Melon','d'=>'Blueberry','m'=>'Langsat','l'=>'Guava'];

$key=array_rand($fruits);

//echo $key;

echo $fruits[$key];
