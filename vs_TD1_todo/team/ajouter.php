<?php 
    include "../PHP/cnx.php";
    
    $aray = isset($_POST["Users"]) ? $_POST["Users"] : "Not declared";
    $name = isset($_POST["name"]) ? $_POST["name"] : "Not declared";
    $desc = isset($_POST["desc"]) ? $_POST["desc"] : "Not declared";

    if($name !="Not declared" && $desc !="Not declared"){
        $teamADD = "INSERT INTO `teams` (`Team_code`, `Team_descr`) VALUES ('$name', '$desc')";
        $stmt = $bdd->prepare($teamADD);
        $stmt->execute();
        $id = $bdd->lastInsertId();
        if($aray != "Not declared"){
           
            foreach($aray[0] as $row){
                $reqAsso =  "insert into asso_user_teams (team_id,user_id,Creation_date,created_by) values('$id','$row',NOW(),'28')";
                $bdd->exec($reqAsso);
            }
           
           
        }
   
        
    }else{
        echo "Name Or Desciption are empry !!";
    }
