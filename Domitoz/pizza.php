<?php
include './manager/CNX.php';
?>
<link href="src/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="src/3w/3w.css" rel="stylesheet" type="text/css"/>
<style>
    .header_tab{
        font-weight: bold;
        font-size: 1.1em;
    }
</style>
<table class="table">
    <tr class="w3-animate-bottom">
        <td class="header_tab">Nom Pizza</td>
        <?php
        $pizza = get_row_nomPizza($bdd);
        while ($nom = $pizza->fetch()) {
            echo "<td class='w3-center'>" . $nom["Pizza_nom"] . "</td>";
        }
        $pizza = "";
        ?>
    </tr>
    <tr class="w3-animate-bottom">
        <td class="header_tab">Prix Pizza</td>
        <?php
        $pizza = get_row_nomPizza($bdd);
        while ($prix = $pizza->fetch()) {
            echo "<td class='w3-center'>" . $prix["Prix"] . "</td>";
        }
        ?>
    </tr>
</table>