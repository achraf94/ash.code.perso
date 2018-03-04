<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = "select * from meeting_notes";
$reponse = $bdd->query($req);

while ($data = $reponse->fetch()) {
    echo $data['Note'];
}
