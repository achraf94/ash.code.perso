<?php

//$bdd = new PDO('mysql:host=localhost;dbname=raidlog', 'root', '');
$myFile = "general.json";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData  = json_encode($_POST);
fwrite($fh, $stringData);
fclose($fh)
?>
