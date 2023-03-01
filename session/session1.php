<?php


/*
 * session er data save hoi server e
 *
 */
/*
session_start();
//$_SESSION['name']="IRFAN";
echo $_SESSION['name'];

session_destroy();

*/
/*
session_start();
$_SESSION['counter']=$_SESSION['counter']??0;
$_SESSION['counter']++;
echo $_SESSION['counter'];
//session_destroy();


*/
session_name('myapp');
session_start([
    'cookie_lifetime'=>15
]);

$_SESSION['name']="IRFAN";
echo $_SESSION['name'];
//session_destroy();

