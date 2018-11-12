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
function getFeatures($bdd){
    $reponse = $bdd->query('select * from component');
    $array = array();
    while($row = $reponse->fetch()){
    $array[$row["Features_ID"]] =$row["Name_f"] ;
    }
    return $array;
}
function getApplication($bdd){
    $reponse = $bdd->query('select * from application');
    $array = array();
    while($row = $reponse->fetch()){
    $array[$row["Apps_ID"]] =$row["Name_a"] ;
    }
    return $array;
}
function Json_Users($bdd){
    $users = getUsers($bdd);
    $rows = array();
    foreach($users as $key => $value){
        $eil=array();
        $eil["DisplayText"]=$value;
        $eil["Value"]=$key;
        $rows[]=$eil;
    }
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['action'] = "users";
    $rows[]=$eil;
    $jTableResult['Options'] = $rows;
return  json_encode($jTableResult);
}
function Json_Features($bdd){
    $features = getFeatures($bdd);
    $rows = array();
    foreach($features as $key => $value){
        $eil=array();
        $eil["DisplayText"]=$value;
        $eil["Value"]=$key;
        $rows[]=$eil;
    }
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['action'] = "features";
    $rows[]=$eil;
    $jTableResult['Options'] = $rows;
return  json_encode($jTableResult);
}
function Json_Application($bdd){
    $appli = getApplication($bdd);
    $rows = array();
    foreach($appli as $key => $value){
        $eil=array();
        $eil["DisplayText"]=$value;
        $eil["Value"]=$key;
        $rows[]=$eil;
    }
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['action'] = "applicationjson";
    $rows[]=$eil;
    $jTableResult['Options'] = $rows;
return  json_encode($jTableResult);
}
?>
