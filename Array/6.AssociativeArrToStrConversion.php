<?php
/*
 *
 *  - অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন
 *Associative Array with
     json_encode() = return string
     json_decode() = return array
 */


$student=[
    'fname'=>"IRFAN",
    'lname'=>"Hossain",
    'skills'=>"Laravel",
    'country'=>"BD",
    'created_at'=>"2023/3/1"
];

print_r($student);

echo join(', ',$student); //Note: MeaningLess

echo "\n";

$jsonData=json_encode($student);
echo $jsonData;
echo "\n";

$student2=json_decode($jsonData,true);
print_r($student2);