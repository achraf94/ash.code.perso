<?php
include('connect.php');
$mdp = $_POST["mdp"];
$login=$_POST["login"];
$sql="select * from etudiant  where nom like '$login' and mdp='$mdp'";
$fetch = $conn->query($sql)->fetchColumn();
if($fetch>0){
    echo "Valide";
}else{
    echo "not valide";
}

?>