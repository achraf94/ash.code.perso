<?php

try {
  // $bdd = new PDO('mysql:host=localhost;dbname=id5724753_linkto;charset=utf8', 'id5724753_achraf', '123123123');
     $bdd = new PDO('mysql:host=localhost;dbname=linkto;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

function getdata($bdd = "", $table = "") {
    $r = "select * from `$table` order by date desc";
    return $bdd->query($r);
}

function getuser_cnx($ps = "", $mdp = "", $bdd = "") {

    return $bdd->query("select COUNT(*) from `user` where pseudo = '$ps' and mdp = '$mdp'")->fetchColumn();
}

function getuser_info($ps = "", $mdp = "", $bdd = "") {
    $r = "select * from `user`  where pseudo = '$ps' and mdp = '$mdp'";
    $tadb = $bdd->query($r);
    return $tadb;
}

function createTab_linkbyid($bdd = "") {
    $r = "select * from `link`";
    $tadb = $bdd->query($r);
    $output = array();
    while ($row = $tadb->fetch()) {
        $output[$row["linkID"]] = $row["link"];
    }
    return $output;
}

function createTab_link_by_id($bdd = "", $id = "") {
    $r = "select * from `link` where owner = $id";
    return $bdd->query($r);
}

function ajoutlink($url, $nom, $id, $bdd) {
    $sql = "INSERT INTO `link` (`link`,nom,owner,date) VALUES ('$url','$nom','$id',NOW())";
    return $bdd->exec($sql);
}
