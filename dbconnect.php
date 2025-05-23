<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "movies_db";
$dsn = "mysql:host=$host;dbname=$db;";

try{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected"."<br>";


}catch(PDOException $e)
{
    echo $e -> getMessage();
}

?>