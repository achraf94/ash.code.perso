<?php

$bdd = new PDO('mysql:host=localhost;dbname=raidlog', 'root', '');

function getProject($bdd) {
    $req1 = "select * from projects";
    $Project = $bdd->query($req1);
    while ($row = $Project->fetch()) {
        $arraySpo[$row["Project_Code"]] = $row["Project_Name"];
    }
    return $arraySpo;
}
