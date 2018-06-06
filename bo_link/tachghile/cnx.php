<?php

include '../db/database.php';

$ps = $_POST["ps"];
$mdp = $_POST["mdp"];
if (getuser_cnx($ps, $mdp, $bdd) > '0') {
    session_start();
    $info = getuser_info($ps, $mdp, $bdd)->fetch();
    $_SESSION["iduser"] = $info["userID"];
} else {
    echo '0';
}