<?php

include 'CNX.php';
echo ajoutCommande($_POST["cl"],$_POST["pi"], $_POST["re"], $bdd);
