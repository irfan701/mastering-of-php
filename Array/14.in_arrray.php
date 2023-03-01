<?php
/*
 * - ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারেতে সার্চ করা
 * in_array
 * array_search
 * key_exists
 */

$fruits=['a'=>'Rambutan','b'=>'Watermelon','f'=>'Apricot','p'=>'Horned Melon','d'=>'Blueberry','m'=>'Langsat','l'=>'Guava'];

$numbers=[10,4,7,3,5,9,2,3,2,1,'55','33'];


//for value check
if (in_array(55,$numbers,true)){
    echo "56 is found.".'\n';
}

//for position check
$offset=array_search(55,$numbers);
echo $offset;

if(key_exists('b',$fruits)){
    echo "Key b exists";
}