<?php

//copy by value or deep copy

$person=[
    'fname'=>"Irfan",
    'lname'=>"Hossain"
];

$newPerson=$person;
$newPerson['lname']="Sanju";

print_r($person);
print_r($newPerson);




//copy by reference or shallow copy
//&=memory address er akta copy
$person2=[
    'fname'=>"Irfan",
    'lname'=>"Hossain"
];

$newPerson2=&$person2;
$newPerson2['lname']="Sanju";

print_r($person2);
print_r($newPerson2);


echo "NEXT LINE"."\n";



function printData(&$person){
    $person['fname'].= " changed";
    print_r($person);
}
printData($person);
print_r($person);