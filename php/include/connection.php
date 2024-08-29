<?php

$dbusername="root";
$dbpassword="";
$dsn="mysql:host=localhost;dbname=unistud-djilweb";

try{

$pdo=new PDO($dsn,$dbusername,$dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "connection to DB has failed " . $e->getMessage();
    die();

}

?>