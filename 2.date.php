<?php
/*
 *
 *  - পিএইচপিতে ডেট ফরম্যাট নিয়ে কাজ করা
 *
 */


//echo date('d/m/y'); // 03/02/23
//echo date('d/M/y'); // 03/Mar/23
//echo date('d/m/Y'); // 03/03/2023
//echo date('d/F/Y'); // 03/March/2023
//echo date('dS M, Y'); // 03rd Mar, 2023

//echo date('dS F, Y');         // 03rd March, 2023
//echo date('dS F, Y h:i:s');   // 03rd March, 2023 06:52:29
//echo date('dS F, Y H:i:s');   // 03rd March, 2023 18:55:39
//echo date('dS F, Y H:i:s a'); // 03rd March, 2023 18:56:13 pm
//echo date('dS F, Y H:i:s A'); // 03rd March, 2023 18:56:00 PM


//echo date('z');       // 61 DAYS  => day of the year
//echo date('t');       // 31 DAYS =>Current month

echo "\n";

//SET SERVER TIMEZONE
date_default_timezone_set("Asia/Dhaka");
//echo date('dS F, Y h:i:s A');     // 03rd March, 2023 11:59:46 PM
//echo date('dS F, Y h:i:s A',time()+12*60*60); // 04th March, 2023 12:06:24 PM




