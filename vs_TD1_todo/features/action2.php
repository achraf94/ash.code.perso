<?php
include "../PHP/cnx2.php";
$action = isset($_GET["action"]) ? $_GET["action"]: "";
$table = isset($_GET["table"]) ? $_GET["table"]: "";
switch($action){
    case "usersJson" :
    print Json_data($bdd,"users");
    break;
    case "appsJson" :
    print Json_data($bdd,"application");
    break;
    case "componentJson" :
    print Json_data($bdd,"component");
    break;
}
if($table=="component"){
    switch($_GET["action"]){
        case "list" :
        $select = "SELECT * FROM component ";
        $row = $bdd->prepare($select);
        $row->execute();
        $rows = array();
        while($donnee = $row ->fetch())
		{
		    $rows[] = $donnee;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "component&list";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
        break;
        case "create" :
        //Insert record into database
        
		$result = "INSERT INTO component (Name,Owner,model,type,comments,date_create,apps_id)  VALUES('" . $_POST["Name"] . "', '" . $_POST["Owner"] . "','" . $_POST["model"] . "','" . $_POST["type"] . "','" . $_POST["comments"] . "',NOW(),'" . $_POST["apps_id"] . "');";
        $bdd->exec($result);
		//Get last inserted record (to return to jTable)
		$select = "SELECT * FROM component ORDER BY Component_ID DESC LIMIT 1";
        $row = $bdd->prepare($select);
        $row->execute();
		$jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "apps&create";
		$jTableResult['Record'] =$row ->fetch();
		print json_encode($jTableResult);
        break;
        case "update" :
        $result = "UPDATE  component set Name ='" . $_POST["Name"] . "',Owner ='" . $_POST["Owner"] . "',";
        $result.="model ='" . $_POST["model"] . "',type ='" . $_POST["type"] . "',comments ='" . $_POST["comments"] . "',date_create =NOW(), ";
        $result.="  apps_id =  '".$_POST["apps_id"]."' where Component_ID =".$_POST["Component_ID"];;
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "component&update";
        print json_encode($jTableResult);
  
        break;
        case "delete" :
        $result = "delete from component where Component_ID = ".$_POST["Component_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "component&delete";
		print json_encode($jTableResult);
        break;
    }
}elseif($table=="versionning"){
    $id = isset($_GET["idComponent"]) ? $_GET["idComponent"] : "";
    switch($_GET["action"]){
        case "list" :
        $select = "SELECT * FROM suivi_versionning where Component_ID =".$id;
        $row = $bdd->prepare($select);
        $row->execute();
        $rows = array();
        while($donnee = $row ->fetch())
		{
		    $rows[] = $donnee;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "Version&list";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
        break;
        case "create" :
        //Insert record into database

		$result = "INSERT INTO suivi_versionning (Component_ID,Name,Owner,model,comments,date_create)  
        VALUES('" . $_POST["Component_ID"] . "','" . $_POST["Name"] . "','" . $_POST["Owner"] . "','" . $_POST["model"] . "',
        '" . $_POST["comments"] . "',NOW()
        )";
        $bdd->exec($result);
		//Get last inserted record (to return to jTable)
		$select = "SELECT * FROM suivi_versionning ORDER BY version_ID DESC LIMIT 1";
        $row = $bdd->prepare($select);
        $row->execute();
		$jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "Version&create";
		$jTableResult['Record'] =$row ->fetch();
		print json_encode($jTableResult);
        break;
        case "update" :
        $date  = $_POST["Date_create"];
        $result = "UPDATE  suivi_versionning set Component_ID ='" . $_POST["Component_ID"] . "',Name ='" . $_POST["Name"] . "'
        Owner ='" . $_POST["Owner"] . "',model ='" . $_POST["model"] . "',comments ='" . $_POST["comments"] . "',date_create = NOW()
        where Apps_ID =  ".$_POST["Apps_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "Version&update";
        print json_encode($jTableResult);
  
        break;
        case "delete" :
        $result = "delete from suivi_versionning where version_ID = ".$_POST["version_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "Version&delete";
		print json_encode($jTableResult);
        break;
    }
}