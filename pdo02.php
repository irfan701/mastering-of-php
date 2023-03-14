<?php
/*
 * - পিডিওতে প্রিপেয়ার্ড স্টেটমেন্ট
 *
 */
$servername = "localhost";
$username = "root";
$password = "";;

$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
if($conn) {
    $sql = "SELECT * FROM students WHERE class=? AND section=?";
    $sth = $conn->prepare($sql);

    $sth->execute(['1','A']);
    print_r($sth->fetchAll());

    $sth->execute(['2','B']);
    print_r($sth->fetchAll());

}
