<?php
include './manager/CNX.php';

$pizza = createTab_pizza($bdd);
$cli = createTab_client($bdd);

?>
<link href="src/3w/3w.css" rel="stylesheet" type="text/css"/>
<link href="src/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="src/CSS/styleforms.css" rel="stylesheet" type="text/css"/>
<link href="src/chosen/chosen.css" rel="stylesheet" type="text/css"/>
<script src="src/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="src/chosen/chosen.jquery.js" type="text/javascript"></script>
<script src="src/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="src/JS/notify.js" type="text/javascript"></script>
<style>
    .sty1    {
        color:red;
        font-size: 1.3em;
        cursor: pointer;
    }
</style>
<div class="login">
    <h1>Nouvelle commandes ?</h1><br><br>
    <form method="post">
        <select class="chosen" id="pizza">
            <?php foreach ($pizza as $key => $value) { ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php } ?>
        </select><br><br>

        <select class="chosen" id="client">
            <?php foreach ($cli as $key => $value) { ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php } ?>
        </select>
        <span data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus sty1"></span><br><br>

        <span class="w3-text-white">Regelement ?</span><br>
        <select class="chosen" id="reglement">
            <option value="1">OUI</option>
            <option value="0">NON</option>
        </select><br><br>
        <button type="button" id="new"class="btn btn-primary  btn-large" style="width: 80%;">envoie</button>
    </form>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">New Client</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="p" placeholder="Nom" id="nom"required="required" /><br>
                <input type="text" name="p" placeholder="Adress" id="adress" required="required" /><br>
                <input type="text" name="p" placeholder="numero" id="num"required="required" /><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="ajoutercli">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(".chosen").chosen({width: "80%"});
        $("#new").click(function () {
            var pizza = $("#pizza").val();
            var cli = $("#client").val();
            var reglement = $("#reglement").val();
            console.log(pizza + " " + cli + " " + reglement);
            $.post("manager/ajouter_commabde.php", {pi: pizza, cl: cli, re: reglement});
            $(this).notify("Commande a ete enregistrer", "success");
        });



        $("#ajoutercli").click(function () {
            var nom = $("#nom").val();
            var adres = $("#adress").val();
            var num = $("#num").val();
            $.post("manager/ajouter_client.php", {n: nom, a: adres, nu: num});
            $(this).notify("Commande a ete enregistrer", "success");
            setTimeout(location.reload.bind(location), 2000);


        });
    });
</script>