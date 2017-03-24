<?php

header('Content-Type: text/plain; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$myValue = $_GET["value"];

try {
    // connect to database
    $conn = new PDO("mysql:host=$servername;dbname=c9", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $stmt = $conn->prepare("select * from some_table where someColumn > ?");
    $stmt->execute([$myValue]);
    
    
    // "select * from users where id in (?,?,?)"
    
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
    var_dump($result);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}