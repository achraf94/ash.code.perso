<?php
session_start();
include './db/database.php';
$id = "";
if (!isset($_SESSION["iduser"])) {
    $string = "Location: index.php";
    header($string);
} else {
    $link = createTab_link_by_id($bdd, $_SESSION["iduser"]);
    echo "<input type='hidden' id='id' value='" . $_SESSION["iduser"] . "'>";
}
?>
<link href="css/3w.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/list.css" rel="stylesheet" type="text/css"/>
<link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/notify.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
<div>
    <span>
        <a href="tachghile/decon.php"><img src="img/deconnecter.png" alt="" class="dec" /></a>
    </span>
</div>
<div class="hide">
    <div class="box hide"> <a></a></div>
</div>
<div class="wrapper">
    <header>
        <a href="javascript:void(0)" class="show-list w3-padding-12"><i class="fa fa-th-list"></i></a>
        <a href="javascript:void(0)" class="hide-list w3-padding-12"><i class="fa fa-th"></i></a>
        <a class="w3-padding-12" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square" ></i></a>

    </header>
    <div class="container">

        <?php
        while ($row = $link->fetch()) {
            ?>
            <div class="box" id="box<?php echo $row["linkID"]; ?>" data-id  = "<?php echo $row["linkID"]; ?>">
                <a href="<?php echo $row["link"]; ?>"><?php echo $row["nom"]; ?></a>
            </div>
            <?php
        }
        ?>


    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ajoute link</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="nom" id="nom"> <br><br>
                <input type="text" class="form-control" placeholder="url" id="url"><br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var id = $("#id").val();
        $('.show-list').click(function () {
            $('.wrapper').addClass('list-mode');
        });
        $('.hide-list').click(function () {
            $('.wrapper').removeClass('list-mode');
        });
        $("#add").click(function () {
            var nom = $("#nom").val();
            var url = $("#url").val();
            if (!empty(nom, url)) {
                $("#add").notify("Empty value !!", "war");
            } else {
                addurl(nom, url, id);
                var box = $("div.hide").find(".box").removeClass("hide");
                box.find("a").attr("href", url);
                box.find("a").text(nom);
                $(".container").append(box);
                $("#myModal").modal("hide");
                $("#add").notify("URL a été sauvegarder !!", "success");
            }
        });
        function addurl(nom, url, id) {
            $.post("tachghile/ajouter_link.php", {nom: nom, url: url, id: id});
        }
        function empty(u, n) {
            if (u === '' || n === '')
                return false;
            else
                return true;
        }
    });
</script>