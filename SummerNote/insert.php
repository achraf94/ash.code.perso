<?php

//
try {
    $bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$action = $_POST["ac"];
$note = $_POST["note"];
$note = str_replace("'", '"', $note);
$sql = "INSERT INTO `meeting_notes` (`Meeting_ID`, `Category`, `Note_Type`, `Note`, `Owner_ID`, `Due_Date`, `Last_Update_Date`, `Creation_Date`, `Last_Update_By`, `Created_By`, `Destroy`, `Project_ID`, `Tab_Index`) VALUES ( '1', 'd', '$action', '$note', '0', '', '', '', '0', '0', '', '', '')";
echo $sql;
$bdd->exec($sql);
