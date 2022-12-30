<?php
include_once 'function.php';

list($host, $dbname, $username, $pass) = ['localhost', 'rezaw_blog', 'root', ''];
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $pass);

} catch (PDOException $error) {
    echoLine("Failed Connection : Connection Error:" . $error->getMessage().$error->getLine().$error->errorInfo);
    exit();
}


