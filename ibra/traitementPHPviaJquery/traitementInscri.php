<?php

$nom = isset($_POST["nom"]) && !empty($_POST["nom"]) ? $_POST["nom"] : "";
$prenom = isset($_POST["prenom"]) && !empty($_POST["prenom"]) ? $_POST["prenom"] : "";
$mail = isset($_POST["mail"]) && !empty($_POST["mail"]) ? $_POST["mail"] : "";
$abonne = isset($_POST["abonne"]) && !empty($_POST["abonne"]) ? "1" : "0";

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
echo '<h3>Bonjour  ' . $nom . ' ' . $prenom . ' votre demande de souscription aux newsletter du SNUIPP a bien été envoyer !</h3>';


