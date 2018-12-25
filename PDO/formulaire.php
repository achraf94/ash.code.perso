<form id ="formu" action ="insertEtudiant.php" method="POST" >
  <div class="form-row">
    <div class="form-group col-md-5">
      <label >NOM</label>
      <input type="text" class="form-control"  placeholder="Nom" name="nom">
    </div>
    <div class="form-group col-md-5">
      <label >Prenom</label>
      <input type="text" class="form-control"  placeholder="Prenom" name="prenom">
    </div>
    <div class="form-group col-md-2">
      <label >Date de naissance</label>
      <input type="Date" class="form-control" name="dateN" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" name="mdp">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="rue">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="Ville" name="ville">
    </div>
   
    <div class="form-group col-md-2">
      <label for="inputZip">Code Postal</label>
      <input type="text" class="form-control" id="inputZip" name="cp">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">s'inscrire</button>
</form>