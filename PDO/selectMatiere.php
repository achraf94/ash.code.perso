
<?php

include('connect.php');

$sql = "SELECT `codemat`, `libelle`, `coef` FROM `matiere`";
    
$resul = $conn->query($sql);
$tableauEtudiants = $resul->fetchALL(PDO::FETCH_ASSOC);

if ( !empty($tableauEtudiants )){
       $res = http_build_query($tableauEtudiants);
        header("Location:listeMatiere.php?".$res);
 }else {
     
     echo '<script> alert("Votre Table est vide");</script>' ;
 }
  

?>

