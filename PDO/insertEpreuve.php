<?php

include('connect.php');
                                                                                                                         
$sql = 'INSERT INTO epreuve (`lieu`, `date`, `codemat`) VALUES (:lieu,:date,:codemat)';
 $stm=$conn->prepare($sql);
 $valeur=array(':lieu'=>$_POST['lieu'],':date'=>($_POST['date'],':codemat'=>$_post['cod'])
       
    echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;
  
}else { echo '<script> alert("Erreur");  document.location.href= "index.php";</script>' ;}
    
    
    
    
}
?>