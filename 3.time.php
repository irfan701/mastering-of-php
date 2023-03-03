<?php

echo time()."\n";  //1677867276
echo mktime(0,0,0,12,1,2023)."\n"; //1701385200
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,12,1,2023)."\n"; //1701367200
//hour minute,second,month,day,year

echo (85200-67200)/(60*60)."\n"; //GMT TIME 5

echo gmmktime(0,0,0,12,1,2023)."\n"; //1701388800

echo "\n";
// DECMBER ER 1date -12 date porjonto kotodin? Ans 9 days

echo (mktime(0,0,0,12,10,2023)- mktime(0,0,0,12,1,2023))/(24*60*60)."\n";