<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "sql104.byethost10.com";
$user = "b10_28403720";
$pass = "r@965c1f";
$db= "b10_28403720_MEMBER";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    // echo "Connected !!";
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>