<?php
//host=localhost or 127.0.0.1
$dsn="mysql:host=localhost;dbname=test;port=3306";
$user="root";
$password="";

try {
    $connection=new PDO($dsn,$user,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
   echo'conect';
} catch (PDOException $ex) {
    die($ex->getMessage()." at File:".$ex->getFile()." at Line:".$ex->getLine());
}

