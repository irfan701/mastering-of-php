<?php
/*
 * Array is a Mutable
 * =>For Inserting Data
 *
 * array_unshift()= last element add korey return korey de
 * array_push() = first element add korey return korey de
 *
 * =>For Removing Data
 *
 * array_shift() =first element remove korey return korey de
 * array_pop() = last element remove korey return korey de
 */


$students=array('Irfan','Sajid','Arman',123);//Array will be start from 0;
/*
$length=count($students);
for ($i=0;$i<$length;$i++){
    echo $students[$i]."\n";
}
*/

//echo array_pop($students);
//echo array_shift($students);


/*
$students[]="PHP";
array_push($students,"JAVASCRIPT");
*/

array_unshift($students,'JAVASCRIPT');

$length=count($students);
for ($i=0;$i<$length;$i++){
    echo $students[$i]."\n";
}

