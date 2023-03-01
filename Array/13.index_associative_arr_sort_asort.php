<?php
/*
 *
 * sort() without original key    ->for loop or foreach
 * rsort() =big to small sort
 * asort() with key                ->foreach
 *
 * ksort() =key opor base korey sort hobey
 */
$fruits=['Rambutan','Watermelon','Apricot','Horned Melon','Blueberry','Langsat','Guava'];
$random=[10,4,7,3,5,9,2,3,2,1];
//asort($fruits);


sort($random);
print_r($random);

for ($i=0;$i<count($random);$i++){
    echo $random[$i]."\n";
}

foreach ($random as $number){
    echo $number."\n";
}

$fruits2=['a'=>'Rambutan','c'=>'Watermelon','x'=>'Apricot','y'=>'Horned Melon','m'=>'Blueberry','l'=>'Langsat','o'=>'Guava'];
asort($fruits2);
print_r($fruits2);


$numberArr=[10,4,7,3,10,5,2,5,2,1];
sort($numberArr,SORT_STRING);
print_r($numberArr);

$fruits4=['Rambutan','Watermelon','Apricot','Blueberry','apple','wix'];
sort($fruits4,SORT_STRING|SORT_FLAG_CASE);//ASCII
print_r($fruits4);
