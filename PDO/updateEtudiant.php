
<?php

include('connect.php');

$id = 8;
$sql = 'UPDATE `etudiant` SET `rue`="6 avenue Avenue de la Pelouse",`ville`="Saint-Mandé",`cp`=94160 WHERE id_numetu ='.$id;
$nbligne=$conn->exec($sql);
if($nbligne == 1) {
       
    echo '<script> alert(" Mise à jour reussie  "); document.location.href = "index.php";</script>' ;
  
}else { echo '<script> alert("Erreur"); </script>' ;}
    

?>