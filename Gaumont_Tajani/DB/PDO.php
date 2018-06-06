<?php

$bdd = new PDO('mysql:host=localhost;dbname=gaumont_tajani', 'root', '');

function getFilm($bdd) {
    $sql = "SELECT * FROM `film`";
    $films = $bdd->query($sql);
    $array = array();
    while ($row = $films->fetch()) {
        $ar = array();
        $ar["id"] = $row["idF"];
        $ar["nom"] = $row["Nom"];
        $ar["date"] = $row["annee"];
        $ar["duree"] = $row["duree"];
        $ar["prix"] = $row["Prix"];
        $ar["img"] = $row["img"];
        $ar["info"] = $row["synopsis"];
        $array[] = $ar;
    }
    return $array;
}

function getFilmById($bdd, $id) {
    $sql = "SELECT * FROM `film` where idF  = " . $id;
    $films = $bdd->query($sql);
    $array = array();
    while ($row = $films->fetch()) {
        $ar = array();
        $ar["id"] = $row["idF"];
        $ar["nom"] = $row["Nom"];
        $ar["date"] = $row["annee"];
        $ar["duree"] = $row["duree"];
        $ar["prix"] = $row["Prix"];
        $ar["img"] = $row["img"];
        $ar["info"] = $row["synopsis"];
        $array[] = $ar;
    }
    return $array;
}

function setSiege($val, $bdd) {
    $sql = "insert into cinema(SiegeNumber) values($val)";
    $ret = $bdd->exec($sql);
    return $ret;
}

function AddRowReservation_tmp($film, $siege, $bdd) {
    $sql = "INSERT INTO `reservation_tmp` (`idFilm`, `idCine`) VALUES ( $film, $siege)";
    $ret = $bdd->exec($sql);
    return $ret;
}

function DeleteRowReservation_tmp($film, $siege, $bdd) {
    $sql = "DELETE FROM `reservation_tmp` where idFilm =$film and idCine = $siege ";
    $ret = $bdd->exec($sql);
    return $ret;
}

function AddRowReservation($film, $siege, $cli) {
    
}

function DeleteRowReservation($id) {
    
}

function getSiegeEncours($id, $bdd) {
    $sql = "select * from reservation_tmp where idFilm = $id";
    $siege = $bdd->query($sql);
    $array = array();

    while ($row = $siege->fetch()) {
        $ar = array();
        $ar["siege"] = $row["idCine"];
        $array[] = $ar;
    }
    return $array;
}
