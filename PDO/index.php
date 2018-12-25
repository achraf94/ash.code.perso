<!DOCTYPE>
<html>
<head>
    
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="js/bootstrap.min.js"></script>
<script>
//init Jquery
$(function(){
  //#inscrire correspond à l'id de la balise <a
  $("#inscrire").click(function(){
        //#contenue correspond à l'id de la balise <div
        //$("#contenu").load("formulaire.php");
        console.log("jai cliqué sur")
    });
    $("#acc").click(function(){
        // actualiser la page index.php
        location.reload(true);
    });
    $("#liste").click(function(){
         $("#contenu").load("selectEtudiant.php");
    });
    $("#conn").click(function(){
         $("#contenu").load("formconnexion.php");
    });
    $("#ajoutM").click(function(){
    
        $("#contenu").load("formulaireMatiere.php");
    });
    $("#affichM").click(function(){
              $("#contenu").load("insertMatiere.php");
    });
    $("#ajoutE").click(function(){
        $("#contenu").load("formulaireEpreuve.php");
    });
    $("#affichE").click(function(){
        $("#contenu").load("insertEpreuve.php");
    });
});

</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <p>Cours PHP & Mysql     </p>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-3 mt-lg-1">
      <li class="nav-item active">
        <a class="nav-link" id= "acc" href="#"> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a id="inscrire" class="nav-link" href="#">  S'inscrire  </a>
      </li>
      <li class="nav-item">
        <a id="liste" class="nav-link" href="#"> Liste des etudiant </a>
      </li>
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
   Matière
  </button>
  <div class="dropdown-menu">
    <a id="ajoutM" class="dropdown-item" href="#">Ajouter</a>
    <a id="affichM" class="dropdown-item" href="#">Afficher</a>

</div>
<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
   Epreuve
  </button>
  <div class="dropdown-menu">
    <a id="ajoutE" class="dropdown-item" href="#">Ajouter</a>
    <a id="affichE" class="dropdown-item" href="#">Afficher</a>
    
    
  </div>
    </ul>
   <a id="conn" class="nav-link" href="#">Se connecter</a>
   <a id="deconn" class="nav-link" href="#">Se déconnecter</a>
  </div>
</nav>
<br>

<div id = "contenu" class="container-fluid">
    <h3>Liens Utiles pour réviser</h3>
    <div class="list-group">
    <a href="https://developer.mozilla.org/fr/docs/Web/HTTP" class="list-group-item list-group-item-action"> Protocole HTTP</a>
    <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" class="list-group-item list-group-item-action">JavaScript</a>
    <a href="https://www.sites.google.com/site/langagephp/cours_debutant-1" class="list-group-item list-group-item-action">Langage php</a>
    <a href="http://php.net/manual/fr/book.pdo.php" class="list-group-item list-group-item-action">Langage php : PDO</a>
    <a href="https://getbootstrap.com/" class="list-group-item list-group-item-action disabled">Boostrap</a>
</div>
</div>

</body>
</html>
