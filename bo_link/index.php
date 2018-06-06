<?php
session_start();
if (isset($_SESSION["iduser"])) {
    $string = "Location: link.php";
    header($string);
}
?>
<link href="css/cnx.css" rel="stylesheet" type="text/css"/>
<link href="css/3w.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="js/notify.js" type="text/javascript"></script>

<div class="form">
    <div id="login">   
        <h1>Link to!</h1>
        <div class="field-wrap">
            <label>
                Pseudo<span class="req">*</span>
            </label><br><br>
            <input id="ps"type="text" />
        </div>
        <div class="field-wrap">
            <label>
                Password<span class="req">*</span>
            </label><br><br>
            <input id="mdp" type="password"/>
        </div>
        <button id="log"class="button button-block"/>Log In</button>
    </div>
</div>

</div> 
<script>
    $(function () {
        $("#log").click(function () {
            var ps = $("#ps").val();
            var mdp = $("#mdp").val();
            $.post("tachghile/cnx.php", {mdp: mdp, ps: ps}, function (i) {
                if (i === '0') {
                    $("#log").notify("no" + i, "error");
                } else {
                    $("#log").notify("oui  " + i, "success");
                    window.location.href = "link.php";
                }
            });
        });
    });
</script>
