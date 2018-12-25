
<?php

include('connect.php');
if(isset($_POST['libelle'])&&isset($_POST['coef']))
{                  
                                                                                                        
$sql = 'INSERT INTO `matiere` (`libelle`, `coef`) VALUES ("'.$_POST['libelle'].'", '.$_POST['coef'].')';
 
$nbligne=$conn->exec($sql);
if($nbligne == 1) {
       
    echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;
  
}else { echo '<script> alert("Erreur");  document.location.href= "index.php";</script>' ;}
}
?>
