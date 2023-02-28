<?php
/*
 * Associative arrays with foreach
 *
 */


$foods=[
    'fruits'=>'Apple,Banana,Apricot,Avocados,Blueberry,Blackcurrant',
    'vegetables'=>'Cucumber	Celery,Greens,Carrot,Capsicum,Onion,Beetroot,Garlic',
    'drinks'=>'water,milk'
];

//$foods['drinks']=$foods['drinks'].", Orange Juice";
$foods['drinks'].=", Orange Juice";


//echo $foods['fruits'];

//for ($i=0;$i<count($foods);$i++){
//    echo $foods[$i];
//} //will error


// LOOP ONE
foreach ($foods as $key=>$value){
    echo $key."=".$value."\n";
}


/*

// LOOP TWO

$keys=array_keys($foods);
//$values=array_values($foods);
//print_r($keys);

for ($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    echo $foods[$key]."\n";
}

*/

// LOOP THREE

$values=array_values($foods);
for ($i=0;$i<count($values);$i++){
    $value=$values[$i];
    echo $value."\n";
}

