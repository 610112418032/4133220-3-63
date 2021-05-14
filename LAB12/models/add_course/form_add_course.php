<?php
require "./conDB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./db_add_course.php" method="post">
    <?php
    try{
        $SQL = "SELECT * FROM MEMBER";
        $members = $conn->query($SQL);

        $SQL = "SELECT * FROM tb_subject";
        $subjects = $conn->query($SQL);

    }
    catch(Exception $e){
        $e->getMessage();
    }
    ?>
        ID : <select name="id" id="">
        <option value="">- กรุณาเลือก -</option>
        <?php
        while($member = $members->fetch_array()){
        ?>
            <option value="<?= $member[0] ?>"<?=$member[0] == $_GET['id']?"selected":""?>><?= $member[0] ?>
                <?= $member[1] . "" . $member[2] ?>
            </option>
        <?php
        }
        ?>
        </select>
        SUBJECT : <select name="subject" id="">
        <option value="">- กรุณาเลือก -</option>
        <?php
        while($subject = $subjects->fetch_array()){
        ?>
            <option value="<?= $subject[0] ?>"><?= $subject[0] ?>
                <?= $subject[1]?>
            </option>
        <?php
        }
        ?>
        </select>
        <button type="submit"> SAVE </button>
    </form>
</body>
</html>