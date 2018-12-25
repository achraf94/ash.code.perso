<div  class="w-75 p-1" id="container">
            <h1>Liste des Matières</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>id</th>
                        <th>Libelle</th>
                        <th>Coefficient</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($_GET as $cle=>$valeur) {?>
                       <tr>
                        
                           
                           ?>
                                   
                                         <td><?php echo $valeur['codemat'] ; ?></td>
                                         <td><?php echo $valeur['codemat'] ; ?></td>
                        
                   
                    </tr>
                    <?php }?>
                </tbody>
            </table>
  
</div>







