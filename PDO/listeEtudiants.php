
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Etudiants</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                         <th>Rue</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       //include("selectEtudiant.php");
                    // dans le fichier selectEtudiant.php la ligne //header("Location:listeEtudiants.php?".$res); sert à envoyer les données à  la //page listeEtudiant avec methode get c'est à dire on stocke la valeur de la variable  $res dans le tableau $_GET
                    //  $_GET = $res 
                    // parcourir le tableau $_GET pour afficher les données 
                        foreach ($_GET as $cle=>$valeur) {?>
                       <tr>
                        <?php foreach ($valeur as $cle1=>$valeur1) {
                           
                           ?>
                                   
                                         <td><?php echo $valeur1 ; ?></td>
                        
                    <?php }?>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
  
</div>
