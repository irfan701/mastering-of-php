<?php
/*
 *
 *  - অ্যারে পরিচিতি
 */

$n=12;

$students=array('Irfan','Sajid',123);//Array will be start from 0;
//var_dump($students);

/*
//Array Length
echo count($students);
*/

/*
[0]=> string(5) "Irfan"
[0] // offset

*/

$length=count($students);
for ($i=0;$i<$length;$i++){
    echo $students[$i]."\n";
}
/*
Irfan
Sajid
123

 */

for ($i=$n-1;$i>=0;$i--){
    echo $students[$i]."\n";
}

/*
123
Sajid
Irfan
 */