<?php
/*
 *
 * cookie data save hoi user e
 */

setcookie('username','irfan',time()+40); //40s

// Cookie delete
//setcookie('username','irfan',1);

//Cookie Access folder  wise //40s
//setcookie('username','irfan',time()+40,'/cookie/my'); //40s


echo $_COOKIE['username'];
