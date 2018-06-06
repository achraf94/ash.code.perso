<?php

include '../db/database.php';
$https = "https://";
$http = "http://";
$nom = $_POST["nom"];
$url = $_POST["url"];
$a = 'How are you?';
$lien = $url;
if (strpos($lien, $https) == false) {
    $lien = $https . "" . $url;
}
$id = $_POST["id"];
echo ajoutlink($url, $nom, $id, $bdd);
