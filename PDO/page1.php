<?php
include './PDO.php';
$dataProject = getProject($bdd);
?>
<link href="../assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<style>
    .w3-col{
        width: 10%;
        height: 10%;
    }
</style>
<div class="contain">
    <h1 class="w3-center">Project</h1>
    <div class="w3-row">
        <?php
        foreach ($dataProject as $row) {
            ?>
            <div class="w3-col w3-border m2 w3-center">
                <?php echo $row; ?>
            </div>
            <?php
        }
        ?>
    </div>
    <div>
        <br>
    </div>
