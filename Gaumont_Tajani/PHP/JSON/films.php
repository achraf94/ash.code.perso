<?php

include '../../DB/PDO.php';

$dataFilm = getFilm($bdd);
$ar = array();
for ($i = 0; $i < count($dataFilm); $i++) {
    $row["id"] = $dataFilm[$i]["id"];
    $row["nom"] = $dataFilm[$i]["nom"];
    $ar[] = $row;
}
echo json_encode($ar);

