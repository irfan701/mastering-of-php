<?php
/*
 * - পিডিওতে ডেটাগুলো গ্রুপ করে তুলে আনা
 */

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_GROUP);

$sql = "SELECT sex,name,roll, FROM students WHERE class=? AND section=?";
$sth = $conn->prepare($sql);

$sth->execute(['1','A']);
//print_r($sth->fetchAll());
$data=$sth->fetchAll();
echo "Total Males".count($data['M']);


/*
 *
 * sex =here,1st column er opor grouping hoye 2ta part e show korbey
 */
