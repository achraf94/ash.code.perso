<?php
// insertEtudiant.php
//La syntaxe : include('nom_fichier.php'); // cela revient à coller le code contenu dans la page connect.php à l’endroit où vous appelez la fonction include().
 
include('connect.php');

$sql = "SELECT `id_numetu`, `nom`, `prenom`, `datenaiss`, `rue`, `ville`, `cp`, `email` from etudiant";
  //$sql = "SELECT `id_numetu`, `nom`, `prenom`, `datenaiss`, `rue`, `ville`, `cp`, `email`, FROM etudiant WHERE nom LIKE 'G%' OR prenom LIKE 'S%'";
$resul = $conn->query($sql);
$tableauEtudiants = $resul->fetchALL(PDO::FETCH_ASSOC);

if ( !empty($tableauEtudiants )){
       $res = http_build_query($tableauEtudiants);
          //REDIRECTion 
        header("Location:listeEtudiants.php?".$res);
 }else {
     
     echo '<script> alert("Votre Table est vide");</script>' ;
 }
  

?>
 