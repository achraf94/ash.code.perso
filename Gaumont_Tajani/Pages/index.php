<?php
include '../DB/PDO.php';
$dataFilm = getFilm($bdd);
?>

<!DOCTYPE html>
<html>
    <title>Films Tajani</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../asstes/3w/3w.css" rel="stylesheet" type="text/css"/>
    <link href="../asstes/autocomplete/easy-autocomplete.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/png" href="../asstes/img/icon.png" />
    <link href="../asstes/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <script src="../asstes/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="../asstes/jR3DCarousel/jR3DCarousel.js" type="text/javascript"></script>

    <script src="../asstes/autocomplete/jquery.easy-autocomplete.js" type="text/javascript"></script>
    <script src="../asstes/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
    <script src="../asstes/FlipAnimation/flip.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <body>
        <input type="hidden"  id="dataFilm">
        <script>
            $(function () {
                var film = [];
<?php
for ($i = 0; $i < count($dataFilm); $i++) {
    ?>
                    film.push({index:<?php echo $i; ?>, id:<?php echo $dataFilm[$i]["id"]; ?>});
    <?php
}
?>

                $("#dataFilm").val(JSON.stringify(film));
            });

        </script>
        <style>
            .superpose{
                background-color: yellow;
                width: 100%;
                height: 300px;
            }
            .curs{
                cursor: pointer;
            }
            .prix{
                font-size: 20px;
                color:#0c2461;
            }
            .title{
                font-size: 20px;
            }
            .carousel{
                margin-left: 530px;
                font-family: 'Poor Story';
                font-weight: bold;
                font-size: 15px;
            }
            .glyphicon{
                cursor: pointer;
                font-size: 1.3em;
                color: #0984e3;
            }
        </style>
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <a href="#home" class="w3-bar-item w3-button"><b>TAJANI</b> Films</a>
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    <a href="#Film" class="w3-bar-item w3-button">Films</a>
                </div>
            </div>
        </div>
        <!-- Header -->
        <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
            <img class="w3-image" src="../asstes/img/cin4.jpg" alt="Architecture" style="width:100%;">
            <div class="w3-display-middle w3-margin-top w3-center">
                <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>TAJANI</b></span> <span class="w3-hide-small w3-text-light-grey">Films</span></h1>
            </div>
        </header>
        <div class="w3-content w3-padding" style="max-width:1564px">
            <div class="w3-container w3-padding-32" id="Film">
                <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Films</h3>
            </div>
            <div class="w3-row-padding">
                <button id="reset" class="btn btn-danger">Reset</button>
                <div class="w3-right">
                    <table>
                        <td></td>
                        <td>
                            <input id="names" type="text" placeholder="chercher films">
                        </td>
                        <td></td>
                    </table>

                </div>
                <div class="carousel">
                    <?php
                    for ($i = 0; $i < count($dataFilm); $i++) {
                        ?>
                        <div class="divcarousel" data-id="<?php echo $dataFilm[$i]["id"]; ?>">
                            <div class="w3-card-4">
                                <div style="width: 100%;height: 300px;"> 
                                    <img class="w3-image"src="../filmimg/<?php echo $dataFilm[$i]["img"]; ?>"/>
                                </div>
                                <div class="w3-container w3-center w3-padding">
                                    <p class="w3-right"><?php echo $dataFilm[$i]["duree"]; ?>H</p>
                                    <p class="w3-left"><?php echo $dataFilm[$i]["date"]; ?></p>
                                    <p class="w3-center prix"><?php echo $dataFilm[$i]["prix"]; ?>€</p>
                                    <p class="title"><?php echo $dataFilm[$i]["nom"]; ?></p>
                                </div>
                            </div>
                            <div class="w3-center w3-padding-top">
                                <span data-toggle="tooltip" data-placement="top" title="<?php echo $dataFilm[$i]["info"]; ?>" class=" glyphicon glyphicon-info-sign"></span>
                                <span data-toggle="tooltip" data-placement="top" title="Reserver" class=" reserver glyphicon glyphicon-film"></span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <br><br>
            <div class="w3-row-padding w3-center sieges">
                <br><br><br><br><br><br>
                <strong>CHOOSE FILMS</strong>
            </div>
        </div>
        <br><br>
        <footer class="w3-center w3-black w3-padding-16">
            <p>Powered by TAJANI</p>
        </footer>
        <script src="../asstes/JS/index.js" type="text/javascript"></script>
    </body>
</html>

