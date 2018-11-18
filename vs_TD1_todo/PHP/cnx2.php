
<?php
$bdd = new PDO('mysql:host=localhost;dbname=raidlog;charset=utf8', 'root', '');
function getdata_from_table($bdd,$tablename=""){
    $reponse = $bdd->query("select * from $tablename");
    $data = array();
    while($row = $reponse->fetch()){
        switch($tablename){
            case "users":
            $data[$row["User_ID"]] =$row["Firstname"] ." ". $row["Lastname"] ;
            break;
            case "component":
            $data[$row["Component_ID"]] =$row["Name"] ;
            break;
            case "application":
            $data[$row["Apps_ID"]] =$row["Name_a"] ;
            break;
        }
    }
    return $data;
}

function Json_data($bdd,$tabs=""){
    $data = getdata_from_table($bdd,$tabs);
    $rows = array();
    foreach($data as $key => $value){
        $eil=array();
        $eil["DisplayText"]=$value;
        $eil["Value"]=$key;
        $rows[]=$eil;
    }
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['action'] = $tabs;
    $rows[]=$eil;
    $jTableResult['Options'] = $rows;
return  json_encode($jTableResult);
}