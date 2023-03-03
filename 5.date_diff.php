<?php
/*
 *
 * - ডেটের মাঝে হিউম্যান রিডেবল ডিফারেন্স বের করা
 */
$d1=new DateTime('20 May 2007');
$d2=new DateTime('27 July 2013');
$difference=date_diff($d1,$d2); //OR //$difference=$d1->diff($d2);

//echo $difference->format("%D"); //07
echo $difference->format("%y Year %m Month %d Days"); //6 Year 2 Month 7 Days

//->format("%d") //7