
<?php

include('connect.php');
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['dateN'])&&isset($_POST['rue'])&&isset($_POST['ville'])&&isset($_POST['cp'])&&isset($_POST['email'])&&isset($_POST['mdp']))
{                                                                                                                          
$sql = 'INSERT INTO etudiant (`nom`, `prenom`, `datenaiss`, `rue`, `ville`, `cp`,`email`,`mdp`) VALUES ("'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['dateN'].'","'.$_POST['rue'].'","'.$_POST['ville'].'",'. $_POST['cp'].',"'.$_POST['email'].'","'.$_POST['mdp'].'" )';
 
$nbligne=$conn->exec($sql);
if($nbligne == 1) {
       
    echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;
  
}else { echo '<script> alert("Erreur");  document.location.href= "index.php";</script>' ;}
    
    
    
    
}
?>