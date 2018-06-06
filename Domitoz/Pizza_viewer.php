<!doctype html>

<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <link href="src/CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="src/3w/3w.css" rel="stylesheet" type="text/css"/>
        <link href="src/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="src/JS/jquery1.12.4.js" type="text/javascript"></script>
        <script src="src/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <link href="src/CSS/loading.css" rel="stylesheet" type="text/css"/>
        <style>
            .im{
                width: 100px;
                height: 100px;
            }
            body{
                background-color: rgba(22,100,100,0.5);
            }
            .prog{
                background-color: rgba(45, 52, 54,0.6);
            }
            .fini{
                background-color: rgba(214, 48, 49,0.6);
            }
            .deb{
                background-color: rgba(253, 203, 110,0.6);
            }
            .styl{
                color: white;
                font-weight: bold;
            }
            .progsBar{
                position: absolute;
                top:0;
                left: 0;
                width: 100%;
                background: url(&#39;https://6ed03b3e7ee716b29bc2dee79aafb8179ed53b19-www.googledrive.com/host/0B9VLbslO6g64UnFTUlQzWDVMdXM&#39;) 50% 50% no-repeat rgb(249,249,249);
            }
        </style>
    </head>
    <body>
        <div class="w3-margin-top w3-center" >
            <div class="w3-col l1  w3-center styl"><button class="w3-text-black reset">Reset</button></div>
        </div>
        <section class="cd-timeline js-cd-timeline mescmd"></section>
        <script src="src/JS/main.js" type="text/javascript"></script>
    </body>
    <script>
        $(function () {
            call();
            setInterval(function () {
                call();
            }, 1000);

            $(".reset").click(function () {
                $.post("manager/reset.php");
            });
            function call() {
                $.post("Commande.php", function (data) {
                    $(".mescmd").html(data);
                });
            }

        });
    </script>
</html>
