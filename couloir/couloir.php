<!DOCTYPE html>
<html>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/3w/3w.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="../assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
        .w3-bar-block .w3-bar-item {padding:20px}
        [contentEditable=true]:empty:not(:focus):before{
            content:attr(data-text)
        }
        .cont{
            border: 1px black solid;
        }
    </style>
    <body>

        <!-- Sidebar (hidden by default) -->
        <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="width: 100%;display:none;z-index:2;" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_open()"
               class="w3-bar-item w3-button w3-center"><span class="glyphicon glyphicon-remove"></span></a>
               <div class="cont"contentEditable=true data-text="Recherche par A"></div>
            <div class="cont"contentEditable=true data-text="Recherche par N"></div>
            <div class="cont"contentEditable=true data-text="Recherche par V"></div>
            <div class="cont"contentEditable=true data-text="Recherche par C"></div>
            <div class="w3-bar-block ">ff</div>
        </nav>

        <!-- Top menu -->
        <div class="w3-top">
            <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
                <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
                <div class="w3-center w3-padding-16">Nos Plats</div>
            </div>
        </div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

            <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="w3-quarter">
                        <br>
                        <img src="https://www.enviedebienmanger.fr/sites/default/files/2017-03/R215-%20Blanquette-saumon-Roquefort-O_Juin12%201366%20x%20480.JPG" alt="Cherries" style="width:100%">
                        <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
                        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                        <button class="btn btn-warning"><span class="glyphicon  glyphicon-shopping-cart"></span> Ajouter au panier</button>

                    </div>
                <?php } ?>
            </div> 

        </div>
        <!-- Footer -->
        <footer class="w3-row-padding w3-padding-32">
            END
        </footer>
        <script>
            // Script to open and close sidebar
            function w3_open() {
                $("#mySidebar").toggle();
            }

        </script>

    </body>
</html>
