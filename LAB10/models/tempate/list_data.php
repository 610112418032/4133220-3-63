<?php
require "../conDB.php";

try{
    $SQL = "SELECT * FROM MEMBER";
    $lists = $conn->query($SQL);
}catch(Exception $e){
    echo $e->getMessage();
}

var_dump($lists);

while($row = $lists->fetch_assoc()){
    $dbdata[] = $row;
}
echo json_encode($dbdata);

?>
