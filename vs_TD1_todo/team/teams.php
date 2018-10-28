<?php 
    include "../PHP/cnx.php";
    $sql = "select * from teams";
    $aray = isset($_POST["Users"]) ? $_POST["Users"] : "Not declared";

    if($aray != "Not declared"){ 
        $ids = "(";
        foreach(   $aray[0] as $row){
            $ids = $ids.",".$row;
        }
        $ids = substr($ids, 2);

         $sql  = "SELECT distinct t.* FROM teams t , asso_user_teams aso where t.Team_id = aso.team_id and aso.user_id in($ids)";
        }
    $reponse=$bdd->query( $sql); 
    while ($teams= $reponse->fetch()){ ?>

    <div id="team1" class="team w3-center">
        <span class="fa fa-trash w3-padding w3-text-red w3-large trash" title="Delete"></span>
        <i class="fa fa-pencil-square w3-padding w3-text-blue w3-large" title="Modify"></i>
        <div class="header" id="myHeader">
            <h5 class="w3-text-text mytext">Team <?php echo $teams["Team_code"];?></h5>
        </div>
        <?php $User_One_Team=getUsers_Team($bdd,$teams[ "Team_id"]); foreach($User_One_Team as $key=> $value) { ?>
        <div class="w3-center w3-margin-top mycard">
            <article>
                <img src="https://png.icons8.com/color/1600/circled-user-male-skin-type-1-2.png" alt="Avatar">
                <h4><b><?php echo $value;?></b></h4>
            </article>
        </div>
        <?php } ?>
        <div class="header">
        <?php echo $teams["Team_descr"];?>
        </div>

    </div>

    <?php  }  ?>