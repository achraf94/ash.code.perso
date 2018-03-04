<?php
try {

    $bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');
    $GLOBALS['bdd'] = $bdd;
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//Get records from database
$result = mysql_query("select * from actions");

//Add all records to an array
$rows = array();
while ($row = mysql_fetch_array($result)) {
    $rows[] = $row;
}

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Records'] = $rows;
print json_encode($jTableResult);
