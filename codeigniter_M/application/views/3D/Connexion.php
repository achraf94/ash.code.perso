<link href="<?php echo base_url(); ?>assets/CSS/regist.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script>
    $(function () {

        $('.btn-enregistrer').click(function () {
            $('.connexion').addClass('remove-section');
            $('.enregistrer').removeClass('active-section');
            $('.btn-enregistrer').removeClass('active');
            $('.btn-connexion').addClass('active');
        });

        $('.btn-connexion').click(function () {
            $('.connexion').removeClass('remove-section');
            $('.enregistrer').addClass('active-section');
            $('.btn-enregistrer').addClass('active');
            $('.btn-connexion').removeClass('active');
        });
        $("#submit").click(function () {
            var pass = $("#username").val();
            var user = $("#password").val();
            var base = $("#base").val();
            $.post(base + "index.php/c_raid/setconnexion", {u: user, p: pass}, function (data) {
                if (data === 'vide') {
                    alert("ERROR");
                } else {
                    window.location.replace(base + "index.php/c_raid/carousel/");
                }
            });
        });
    });

</script>
<body> 
    <input type="hidden" id="base" value="<?php echo base_url(); ?>">
        <div class="content">
            <div class="container">
                <img class="bg-img" src="https://www.grandvincent-marion.fr/_codepen/bg.jpg" alt="">
                    <div class="menu">
                        <a href="#connexion" class="btn-connexion"><h2>SIGN IN</h2></a>
                        <a href="#enregistrer" class="btn-enregistrer active"><h2>SIGN UP</h2></a>
                    </div>
                    <div class="connexion">
                        <div class="contact-form">
                            <label>USERNAME</label>
                            <input placeholder="Pseudo" type="text" id="username">
                                <label>PASSWORD</label>
                                <input placeholder="Password" type="password" id="password">
                                    <div class="check">
                                        <label>				
                                            <input id="check" type="checkbox" class="checkbox">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                                    <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                                    <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                                </svg>
                                        </label>
                                        <h3>Keep me signed in</h3>
                                    </div>

                                    <input class="submit" value="SIGN IN" type="submit" id="submit">
                                        </div>

                                        <hr>
                                            <a href="https://www.grandvincent-marion.fr/" target="_blank"><h4>Forgot password?</h4></a>
                                            </div>

                                            <div class="enregistrer active-section">
                                                <div class="contact-form">
                                                    <label>USERNAME</label>
                                                    <input placeholder="" type="text">

                                                        <label>E-MAIL</label>
                                                        <input placeholder="" type="text">	

                                                            <label>PASSWORD</label>
                                                            <input placeholder="" type="password">

                                                                <label>CONFIRM PASSWORD</label>
                                                                <input placeholder="" type="text">

                                                                    <div class="check">
                                                                        <label>				
                                                                            <input id="check" type="checkbox" class="checkbox">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                                                                    <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                                                                    <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                                                                </svg>
                                                                        </label>
                                                                        <h3>I agree</h3>
                                                                    </div>

                                                                    <input class="submit" value="SIGN UP" type="submit">	

                                                                        </div>
                                                                        </div>

                                                                        </div>

                                                                        </div>


</body> 