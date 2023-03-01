<?php

/*
 * অ্যাসোসিয়েটিভ অ্যারে থেকে ডেটা রিমুভ করা
 * unset()
 */

$student=[
    'fname'=>"IRFAN",
    'lname'=>"Hossain",
    'skills'=>"Laravel",
    'country'=>"BD",

];

print_r($student);
unset($student['country']);
print_r($student);