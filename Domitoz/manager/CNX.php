<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=domitoz;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

function getdata($bdd = "", $table = "") {
    $r = "select * from `$table` order by date desc";
    return $bdd->query($r);
}

function getcommandes($bdd = "") {
    $r = "select * from commmande  order by date desc";
    return $bdd->query($r);
}

function createTab_pizza($bdd) {
    $r = "select * from `pizza`";
    $piza = $bdd->query($r);
    $output = array();
    while ($row = $piza->fetch()) {
        $output[$row["PizzaID"]] = $row["Pizza_nom"];
    }
    return $output;
}

function createTab_client($bdd) {
    $r = "select * from `client`";
    $cli = $bdd->query($r);
    $output = array();
    while ($row = $cli->fetch()) {
        $output[$row["Client_ID"]] = $row["Nom"];
    }
    return $output;
}

function ajoutCommande($cli, $pi, $reg, $bdd) {
    $sql = "INSERT INTO commmande (Cli_id, date,etat,pizza_id,regle)"
            . " VALUES ('$cli',NOW(),'EC','$pi',$reg)";
    return $bdd->exec($sql);
}

function ajoutclient($n, $a, $nu, $bdd) {
    $sql = "INSERT INTO client (Nom, Adress,Tel)"
            . " VALUES ('$n','$a','$nu')";
    return $bdd->exec($sql);
}

function set_value_progressBar($last_value) {
    return $last_value + 1;
}

function set_value_progres($id_cmd = "", $bdd = "") {
    $sql = "update commmande set progress =  progress+2 where  Cmd_ID = $id_cmd";
    $bdd->exec($sql);

    $sql = "select progress from commmande where Cmd_ID = :id";
    $statement = $bdd->prepare($sql);
    $statement->bindValue(':id', $id_cmd);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($row['progress'] === "98") {
        commande_fini($id_cmd, $bdd);
        echo "100";
    } else {
        echo $row['progress'];
    }
}

function commande_fini($id_cmd = "", $bdd = "") {
    $sql = "update commmande set etat =  'F' where  Cmd_ID = $id_cmd";
    $bdd->exec($sql);
}

function commande_reset($bdd = "") {
    $sql = "update commmande set etat =  'EC', progress = '0' ";
    $bdd->exec($sql);
}

function commande_delete($id = "", $bdd = "") {
    $sql = "delete from commmande where  Cmd_ID= $id ";
    $bdd->exec($sql);
}

function get_row_nomPizza($bdd = "") {
    $r = "select * from pizza";
    return $bdd->query($r);
}

