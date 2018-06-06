<br><br>                   <br><br>            <br><br>
<?php
include '../DB/PDO.php';
$id = $_POST["id"];
$dataFilm = getFilmById($bdd, $id);
?>
<div>
    <input type="hidden" id="film" value="<?php echo $id; ?>">
    <input type="hidden" id="film_tmp">
    <input type="hidden" id="siege_tmp">
    <input type="hidden" id="flip_tmp">
</div>
<div class="w3-row" style="padding-left: 100px;padding-right: 100px; ">
    <?php
    for ($i = 0; $i < 44; $i++) {
        ?>
        <div id="Card<?php echo $i + 1; ?>" class="flip w3-col w3-border m2 w3-center" style="position: relative;width: 100px;height: 100px;">
            <div id="<?php echo $i + 1; ?>" onclick="document.getElementById('id01').style.display = 'block'" class="curs siege front">

                <img data-toggle="tooltip" data-placement="top" title="Siege numero <?php echo $i + 1; ?>" src="../asstes/img/siege.png" alt="" class="w3-white"style="width: 90px;height: 80px;"/>
                <span class="glyphicon glyphicon-play flipon" title="reserver"></span>
            </div>
            <div class="back">
                Reserver
            </div> 


        </div>
        <?php
    }
    ?>

</div>
<div style="  text-shadow: hsla(0,0%,40%,.5) 0 -1px 0, hsla(0,0%,100%,.6) 0 2px 1px;padding-left: 35%;padding-right: 35%;" class="w3-margin">
    <p class="title"><?php echo $dataFilm[0]["nom"]; ?></p>
    <p class="w3-right">Durée <?php echo $dataFilm[0]["duree"]; ?>H</p>
    <p class="w3-left">Année de sortie <?php echo $dataFilm[0]["date"]; ?></p>
    <p class="w3-center prix">Prix <?php echo $dataFilm[0]["prix"]; ?>€</p>

</div>


<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content">
        <div class="w3-container">
            <span onclick="document.getElementById('id01').style.display = 'none'" class="close w3-button w3-display-topright">&times;</span>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Reservation</h4>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<div id="script" class="hide">

</div>
<script>
    $(function () {

        $('[data-toggle="tooltip"]').tooltip();
//        $(".siege").click(function () {
//            var siege = this.id;
//            var film = <?php echo $id; ?>;
//            $("#siege_tmp").val(siege);
//            $("#film_tmp").val(film);
//            $.post("../PHP/EventFunction/insert_tmp.php", {mode: "insert", film: film, siege: siege});
//        });
//        $('#myModal').on('hidden.bs.modal', function () {
//            var siege = $("#siege_tmp").val();
//            var film = $("#film_tmp").val();
//            $.post("../PHP/EventFunction/insert_tmp.php", {mode: "delete", film: film, siege: siege});
//        });
        setInterval("searchSiege()", 1000);
//        $(".check").click(function () {
//            searchSiege();
//        });
        $(".flip").flip({
            trigger: 'manual'
        });
//        $(".flipon").click(function () {
//            $(".flip").flip(true);
//        });
        $(".flipoff").click(function () {
            $(".flip").flip(false);
        });
        $(".flipon").click(function () {
            var siege = $(this).parents(".siege").attr("id");
            var film = <?php echo $id; ?>;
            $("#flip_tmp").val(siege);
            $("#siege_tmp").val(siege);
            $("#film_tmp").val(film);
            //$.post("../PHP/EventFunction/insert_tmp.php", {mode: "insert", film: film, siege: siege});
        });
        $(".close").click(function () {
            var fli = $("#flip_tmp").val();
            var siege = $("#siege_tmp").val();
            var film = $("#film_tmp").val();
            $.post("../PHP/EventFunction/insert_tmp.php", {mode: "delete", film: film, siege: siege});

        });
    });

    function searchSiege() {
        var id = $("#film").val();
        $.post("../PHP/EventFunction/insert_tmp.php", {id: id, mode: "select"}, function (data) {
            $("#script").html(data);
        });

    }
</script>