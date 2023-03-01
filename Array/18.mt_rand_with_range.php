<?php

/*
 * - অ্যারে শাফল করা এবং র‍্যান্ডম নাম্বার নিয়ে আলোচনা.
 *
 */
$numbers=range(40,70);
print_r($numbers);

$random=mt_rand(0,32); //refresh
echo $random."\n";


$luck=$numbers[$random];
//echo $luck;

if($luck%2==0){
    echo "Head";
}else{
    echo "Tail";
}

echo "\n";
// Note : execuation time bese nibey
shuffle($numbers);
print_r($numbers);
$randomNumbers=$numbers[3];
echo $randomNumbers;
