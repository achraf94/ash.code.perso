<?php

try {

    $bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');
    $GLOBALS['bdd'] = $bdd;
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req1 = "select * from actions";
$Actions = $bdd->query($req1);
$count = $Actions->rowCount();
$data = array();
$i = 0;
while ($rowAction = $Actions->fetch()) {
    $ligne = array();
    $ligne[] = $rowAction["Action_ID"];
    $ligne[] = $rowAction["Project_ID"];
    $ligne[] = $rowAction["Status_ID"];
    $ligne[] = $rowAction["Action_Point"];
    $data[] = $ligne;
}
$output = array(
    "draw" => $i++,
    "recordsTotal" => $count,
    "data" => $data,
);
//output to json format
echo json_encode($output);
//$CustemerR = "select * from customers";
//$sponsorR = "select * from sponsor";
//$userR = "select * from users";
//$sponsor = $bdd->query($sponsorR);
//$Custemer = $bdd->query($CustemerR);
//$user = $bdd->query($userR);
//$arraySpo = array();
//$arrayCu = array();
//$arrayUse = array();
//while ($row = $sponsor->fetch()) {
//    $arraySpo[$row["sponsor_id"]] = $row["sponsor_name"];
//}
//while ($row = $Custemer->fetch()) {
//    $arrayCu[$row["Customer_id"]] = $row["NAME"];
//}
//while ($row = $user->fetch()) {
//    $arrayUse[$row["User_ID"]] = $row["Lastname"] . " " . $row["Firstname"];
//}