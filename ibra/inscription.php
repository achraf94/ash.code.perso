<html>
    <head>
        <title>Choix1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="checkboxStyle.css" rel="stylesheet" type="text/css"/>        <link href="../asstes/css/css1.css" rel="stylesheet" type="text/css"/>
        <link href="../asstes/css/css2.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    </head>
    <body>
        <div id="ib">
            <?php
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail'])) {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $mail = htmlspecialchars($_POST['mail']);

                echo '<h3>Bonjour  ' . $nom . ' ' . $prenom . ' votre demande de souscription aux newsletter du SNUIPP a bien été envoyer !</h3>';
            }
            ?>
        </div><br /><br />
        <div class="login-wrap">




            <form method="post" action="page_inscription.php" name="formulaire"  >
                <div class="login-html">
                    <h2 class="styleText">Formulaire d'inscription aux newsletter du SNUIPP</h2><br />
                    <div class="login-form">
                        <div class="sign-up-htm">
                            <div class="group">
                                <label for="nom" class="label"></label>
                                <input name="nom" id="nom" type="text" class="input" placeholder="Nom" required >
                            </div>
                            <div class="group">
                                <label for="prenom" class="label"></label>
                                <input name="prenom" id="prenom" type="text" class="input"  placeholder="Prénom" required>
                            </div>
                            <div class="group">
                                <label for="mail" class="label"></label>
                                <input id="mail" type="email" class="input" name="mail" placeholder="Adresse mail" required>
                            </div>
                            <div>
                                <label class="container">
                                    <input type="checkbox" name="conditions" value="OK"  />
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                            <div>
                                <span class="text-style1">Je souhaite m'abonner au newsletter du SNUIPP .</span>
                            </div><br /><br />
                            <div class="group">
                                <input type="submit" class="button" value="Je m'inscris">
                            </div>
                            <div class="hr"></div>
                            <div id="presentation-image">
                                <ul class="social-icons">
                                   
                                    <li><a href="http://www.facebook.com"><img src='facebook.png' /></a></li>
                                    <li><a href="http://www.twitter.com"><img src='twitter.png' /></a></li>
                                    <li><a href="http://www.instagram.com"><img src='instagram.png' /></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </form>

        </div>
    </body>
</html>