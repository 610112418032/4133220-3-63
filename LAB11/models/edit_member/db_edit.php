<?php
require "./conDB.php";

$member_id = $_POST['member_id'];
$subject_id = $_POST["subject_id"];

try{
    $SQL = "UPDATE tb_course 
            SET course_subject = '$subject'
            WHERE course_member_id = '$member_id'
    ";
    $con->query($SQL);
}
catch(Exception $e){
    $e->getMessage();
}
?>