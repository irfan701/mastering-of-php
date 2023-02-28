<?php
/*
 * Multidimensional Array= Nested Array or Array er moddey Array
 *
 *
 */
$foods=[
    'fruits'=>explode(', ','Apple, Banana, Apricot, Avocados, Blueberry, Blackcurrant'),
    'vegetables'=>explode(', ','Cucumber, Celery, Greens, Carrot, Capsicum, Onion, Beetroot, Garlic'),
    'drinks'=>explode(', ','water, milk')
];

print_r($foods);

array_push($foods['drinks'],'Orange Juice');
print_r($foods);
echo $foods['fruits'][2];



$sample=[
  'test'=>[
      'test-again'=>['a','b','c','d']
  ]
];
echo $sample['test']['test-again'][2]; //output c


$sample2=[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[4,5,7]]
];
echo $sample2[3][3][1]; //output 5

