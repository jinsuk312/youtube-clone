<?php
ob_start(); // turns on output buffering, makes the output wait till everythings done loading
session_start();
date_default_timezone_set("America/Chicago");

try{
    $con = new PDO("mysql:dbname=VideoTube;host=localhost", "root", ""); 
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // error handling
}
catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}

?>