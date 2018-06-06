<link href="../assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
<link href="../assets/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<style>
    .img{
        width: 50px;height: 50px;

    }


</style>
<div class="w3-panel w3-border w3-round-xxlarge w3-col l2 w3-center hide w3-margin w3-padding-12 w3-animate-right  ">
    <span class="w3-text-red fas fa-trash-alt  iconStyle2  w3-right"></span>
   <img src="../assets/img/ideapng.png" class="w3-image img" alt=""/>
    <br>    <br>
    <p contenteditable="true" class="info"></p>
    <br>
        <span class="w3-opacity w3-left w3-responsive w3-small">AAAAAAA AAAAAAAB</span>
        <span class="w3-opacity w3-right w3-small">12/12/2019</span>    <br><br>
    <button class="btn btn-success w3-border w3-round-xxlarge">Save</button>
</div>
<button class="btn btn-danger" id="click">ADD</button>
<div class="w3-row">

</div>
<script>
    $(function () {

        var i = 0;
        $("#click").click(function () {
            add();
        });


        function add() {
            i++;
            var card = $(".hide").clone(true).removeClass("hide");
            card.find(".info").text("Box numero Box numero Box numero Box numero Box numero Box numero Box numero Box numero Box numeroBox numeroBox numero " + i);
            $(".w3-row").last().append(card);
        }
    });
</script>