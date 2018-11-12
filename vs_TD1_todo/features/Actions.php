<?php
include "../PHP/cnx.php";
if(isset($_GET["action"]) && $_GET["action"]=="features"){
    print Json_Features($bdd);
}
elseif(isset($_GET["action"]) && $_GET["action"]=="users"){
    print Json_Users($bdd);
}
elseif(isset($_GET["action"]) && $_GET["action"]=="appsJson"){
    print Json_Application($bdd);
}
elseif(isset($_GET["table"]) && $_GET["table"] == "apps"){
    switch($_GET["action"]){
        case "list" :
        $select = "SELECT * FROM application ";
        $row = $bdd->prepare($select);
        $row->execute();
        $rows = array();
        while($donnee = $row ->fetch())
		{
		    $rows[] = $donnee;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "apps&list";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
        break;
        case "create" :
        //Insert record into database
        $date  = $_POST["Date_create"];
		$result = "INSERT INTO application (Name_a,Date_create,Created_by)  VALUES('" . $_POST["Name_a"] . "', STR_TO_DATE('$date', '%d-%m-%Y'),'" . $_POST["Created_by"] . "');";
        $bdd->exec($result);
		//Get last inserted record (to return to jTable)
		$select = "SELECT * FROM application ORDER BY Apps_ID DESC LIMIT 1";
        $row = $bdd->prepare($select);
        $row->execute();
		$jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "apps&create";
		$jTableResult['Record'] =$row ->fetch();
		print json_encode($jTableResult);
        break;
        case "update" :
        $date  = $_POST["Date_create"];
        $result = "UPDATE  application set Name_a ='" . $_POST["Name_a"] . "',Date_create = STR_TO_DATE('$date', '%d-%m-%Y') ,Created_by='" . $_POST["Created_by"] . "' where Apps_ID =  ".$_POST["Apps_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "apps&update";
        print json_encode($jTableResult);
  
        break;
        case "delete" :
        $result = "delete from application where Apps_ID = ".$_POST["Apps_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "apps&delete";
		print json_encode($jTableResult);
        break;
    }
}
elseif((isset($_GET["table"]) && $_GET["table"] == "features")){
    switch($_GET["action"]){
        case "list" :
        $select = "SELECT * FROM Component ";
        $row = $bdd->prepare($select);
        $row->execute();
        $rows = array();
        while($donnee = $row ->fetch())
		{
		    $rows[] = $donnee;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "features&list";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
        break;
        case "create" :
        //Insert record into database
        $date  = $_POST["Date_create"];
		$result = "INSERT INTO Component (Name_f,Date_create,Owner_f,apps_id,type)  VALUES('" . $_POST["Name_f"] . "', STR_TO_DATE('$date', '%d-%m-%Y'),'" . $_POST["Owner_f"] . "','" . $_POST["apps_id"] . "','" . $_POST["type"] . "');";
        $bdd->exec($result);
		//Get last inserted record (to return to jTable)
		$select = "SELECT * FROM Component ORDER BY Features_ID DESC LIMIT 1";
        $row = $bdd->prepare($select);
        $row->execute();
		$jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "features&create";
		$jTableResult['Record'] =$row ->fetch();
		print json_encode($jTableResult);
        break;
        case "update" :
        $date  = $_POST["Date_create"];
        $result = "UPDATE  Component set Name_f ='" . $_POST["Name_f"] . "',Date_create = STR_TO_DATE('$date', '%d-%m-%Y') ,Owner_f='" . $_POST["Owner_f"] . "' apps_id ='" . $_POST["apps_id"] . "',type = '" . $_POST["type"] . "' where Features_ID =  ".$_POST["Features_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "features&update";
        print json_encode($jTableResult);
  
        break;
        case "delete" :
        $result = "delete from Component where Features_ID = ".$_POST["Features_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "features&delete";
		print json_encode($jTableResult);
        break;
    }
}elseif(isset($_GET["table"]) && $_GET["table"] == "suivi"){
    switch($_GET["action"]){
        case "list" :
        $select = "SELECT * FROM suivi_versionning ";
        $row = $bdd->prepare($select);
        $row->execute();
        $rows = array();
        while($donnee = $row ->fetch())
		{
		    $rows[] = $donnee;
        }
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "suivi&list";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
        break;
        case "create" :
        //Insert record into database
        $date  = $_POST["date_create"];
		$result = "INSERT INTO suivi_versionning (ID_creator_f,ID_modifier_f,model,comments,date_create)  VALUES('" . $_POST["ID_creator_f"] . "', '" . $_POST["ID_modifier_f"] . "','" . $_POST["model"] . "','" . $_POST["comments"] . "',STR_TO_DATE('$date', '%d-%m-%Y') );";
        $bdd->exec($result);
		//Get last inserted record (to return to jTable)
		$select = "SELECT * FROM suivi_versionning ORDER BY version_ID DESC LIMIT 1";
        $row = $bdd->prepare($select);
        $row->execute();
		$jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "suivi&create";
		$jTableResult['Record'] =$row ->fetch();
		print json_encode($jTableResult);
        break;
        case "update" :
        $date  = $_POST["date_create"];
        $result = "UPDATE  suivi_versionning set ID_creator_f ='" . $_POST["ID_creator_f"] . "',ID_modifier_f ='" . $_POST["ID_modifier_f"] . "',model ='" . $_POST["model"] . "',comments ='" . $_POST["comments"] . "',date_create = STR_TO_DATE('$date', '%d-%m-%Y')  where version_ID =  ".$_POST["version_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "features&update";
        print json_encode($jTableResult);
  
        break;
        case "delete" :
        $result = "delete from suivi_versionning where version_ID = ".$_POST["version_ID"];
        $bdd->exec($result);
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['action'] = "suivi&delete";
		print json_encode($jTableResult);
        break;
    }
}



?>