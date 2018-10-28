<?php
$bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');

$User = getUsers($bdd);

function getTeam($bdd){
    $reponse = $bdd->query('select * from teams');
    return $reponse;
}

function getNameUser_ByID($id=""){
    $name = "";
    foreach($GLOBALS['User'] as $key=> $value){
        if($id == $key)
        {
            $name = $value;
        }
    }
    return $name;
}
function getUsers_Team($bdd,$id_team){
    $reponse = $bdd->query('select user_id from asso_user_teams where team_id ='.$id_team);
    $Users = array();
    while($row = $reponse->fetch()){
        $Users[$row["user_id"]] = getNameUser_ByID($row["user_id"]);
    }
    return $Users;
} 
function getUsers($bdd){
    $reponse = $bdd->query('select * from users');
    $Users = array();
    while($row = $reponse->fetch()){
    $Users[$row["User_ID"]] =$row["Firstname"] ." ". $row["Lastname"] ;
    }
    return $Users;
}
?>
