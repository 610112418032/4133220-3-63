<?php
require "./conDB.php";

$id =$_GET["id"];

try{
    $SQL = "DELETE FROM MEMBER
            WHERE member_id = '$id'
            ";
    $conn->query($SQL);


}
catch(Exception $e){
    echo $e->getMexxage();
}


?>