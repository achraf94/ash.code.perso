<?php
 
include('connect.php');
session_start();
if(isset($_POST['email'])&&isset($_POST['mdp'])) {

$sql =  'SELECT * from etudiant where email="'.$_POST['email'].'"AND mdp="'.$_POST['mdp'].'"';

$resul = $conn->query($sql);
$tableauEtudiant = $resul->fetch(PDO::FETCH_ASSOC);

if ( !empty($tableauEtudiant)){
        $_SESSION['etudiant'] =$tableauEtudiant ;
          //REDIRECTion 
        header("Location:index.php");
 }else {
     
     echo '<script> alert("Votre email ou mot de passe pas valide");
     document.location.href= "index.html";
     </script>' ;
 }
  

    
    
    
}
?>