<?php

/*
 * - স্ট্রিং ট্রিমিং নিয়ে আলোচনা
 * trim()
 * ltrim()
 * rtrim()
 */


$string1="   Hello World 1`,\n";
$stringTrim1=trim($string1); //removing non-printable
echo $stringTrim1;
echo "Data One";

echo "\n";

$string2="   Hello World 2  \n,";
$stringTrim2=trim($string2,'\n,'); //specific removing non-printable
echo $stringTrim2;
echo "Data Two";