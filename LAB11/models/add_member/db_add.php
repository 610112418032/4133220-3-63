<?php
require "./conDB.php";

$id = $_POST['id'];
$name = $_POST['name'];
$sname = $_POST['sname'];
$dob = $_POST['dob'];

try{
    $SQL = "INSERT INTO MEMBER 
            VALUES('$id','$name','$sname','$dob')
    ";
    $conn->query($SQL);
}
catch(Exception $e){
    $e->getMessage();
}

?>