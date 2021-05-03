<?php
require "../conDB.php";

try{
    $SQL = "SELECT * FROM MEMBER";
    $lists = $conn->query($SQL);
}catch(Exception $e){
    echo $e->getMessage();
}


?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME - LASTNAME</th>
            <th>Date of Birth</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = $lists->fetch_assoc()){
        ?>
        <tr>
            <td><?=$row["member_Id"]?></td>
            <td><?=$row["member_Name"] . " " . $row["member_usrName"]?></td>
            <td><?=$row["member_Dob"]?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>