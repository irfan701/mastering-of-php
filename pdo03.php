<?php
/*
 *  - পিডিওতে ডেটাগুলো কি ভ্যালু জোড়া হিসেবে তুলে আনা
 */
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_KEY_PAIR);

$sql = "SELECT roll,name FROM students WHERE class=? AND section=?";
$sth = $conn->prepare($sql);

$sth->execute(['1','A']);
print_r($sth->fetchAll());


