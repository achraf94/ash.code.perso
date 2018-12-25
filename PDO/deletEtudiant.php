
<?php

include('connect.php');

$id = 9;

$sql =  'DELETE FROM etudiant WHERE id_numetu ='.$id; 
$nbligne=$conn->exec($sql);
if($nbligne == 1) {
       
    echo '<script> alert(" Suppression reussie  "); document.location.href = "index.php";</script>' ;
  
}else { echo '<script> alert("Erreur"); </script>' ;}
    

?>