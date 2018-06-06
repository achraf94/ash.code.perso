<?php

include '../../DB/PDO.php';
$mode = $_POST["mode"];
switch ($mode) {
    case "insert":
        $film = $_POST["film"];
        $siege = $_POST["siege"];
        echo AddRowReservation_tmp($film, $siege, $bdd);
        break;
    case "delete":
        $film = $_POST["film"];
        $siege = $_POST["siege"];
        echo DeleteRowReservation_tmp($film, $siege, $bdd);
        break;
    case "select":
        $film = $_POST["id"];
        $arraysiege = getSiegeEncours($film, $bdd);
        $script = "<script>  $(function() { lis = [];";
        for ($i = 0; $i < count($arraysiege); $i++) {
            $idDiv = $arraysiege[$i]["siege"];
            $script.="  lis[$i] = $idDiv;";
        }
//        $script .= "console.log(lis);var i=0;$('.siege').each(function(){";
//        $script.=" if(this.id !== lis[i]){ $(this).show();} else{ $(this).hide();} ";
//        $script.="i++;});";

        $script.="for(var o = 0;o<lis.length;o++){ $().hide();}";
        $script.="});";
        $script.="</script>";
        echo $script;
        break;
}
