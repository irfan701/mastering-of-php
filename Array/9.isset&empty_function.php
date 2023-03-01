<?php
/*
 * isset()
 * empty()
 * confusion with $name=0;
 * is_numeric()
 */



//$name; //Not Set
//$name=null; //Not Set

//$name=''; //Name Is Set
//$name='Irfan';//Name Is Set
//$name=-1;//Name Is Set


//////////////////////
//$name=0;//Name Is Set ;Note There is a problem for empty fun
$name=false;
///////////////////
if (isset($name)){
    echo "Name Is Set";
}else{
    echo "Not Set";
}
echo "\n";
if (empty($name)){
    echo "Name Is empty";
}else{
    echo "Not empty";
}


echo "\n";
if (isset($name) &&(is_numeric($name) || $name!='')){
    echo "Name Is Set And It's not empty";
}else{
    echo "Name is either not set or it's empty";
}