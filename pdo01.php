<?php
/*
 *  - পিডিও দিয়ে মাল্টিপল কলাম এবং রো ডেটা একবারে দেখানো, সাথে ডিফল্ট ফেচিং মোড সেট করা
 */

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
//    // set the PDO error mode to exception
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";

if($conn){
    $sql="SELECT COUNT (*) AS N FROM students WHERE class='1' AND section='A'";
    $sth=$conn->query($sql);
    print_r($sth->fetch(PDO::FETCH_ASSOC));

    //for Getting only single value
    $total=$sth->fetchColumn(); //26[Array Return na korey ,Single Value Return korey]
    echo $total;


    //For getting multiple row or multiple column
    $result=$sth->fetchAll(); //[Array Return  korey]
    print_r($result);



}