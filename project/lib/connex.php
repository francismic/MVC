<?php

$hostname = "localhost";
$dbname = "e2195223";
$username="e2195223";
$password="WqScf1yZRuG2V8IZTHCA";
$port=3306;


$con = mysqli_connect($hostname, $username, $password, $dbname, $port);

if(!$con){
    die("Error connection ".mysqli_connect_error());
}

mysqli_set_charset($con,"utf8");
?>