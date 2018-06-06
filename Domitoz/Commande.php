<?php
include './manager/CNX.php';
$commandes = getcommandes($bdd);
$pizza = createTab_pizza($bdd);
$cli = createTab_client($bdd);

?>
<style>
    .im{
        width: 100px;
        height: 100px;position: absolute; top: 0px;left: 40%;
    }
    .myicno{
        color:red;
        cursor: pointer;
    }

</style>
<div class="cd-timeline__container">

    <?php
    while ($row = $commandes->fetch()) {
        //  echo $row["Cmd_ID"] . "" . $row["Cli_id"] . "" . $row["pizza_id"] . "" . $row["qnt"] . "" . $row["regle"];
        if ($row["etat"] == "EC") {
            ?>
            <div class="cd-timeline__block js-cd-block  di" data-id="<?php echo $row["Cmd_ID"]; ?>">

                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">

                </div> 
                <div class="cd-timeline__content js-cd-content">
                    <span class="glyphicon glyphicon-remove myicno remove  w3-right"></span><br>
                    <progress class="Progress-main" aria-labelledby="Progress-id" value="<?php echo set_value_progres($row["Cmd_ID"], $bdd); ?>" max="100" ></progress>

                    <h2 class="w3-left"><?php echo $pizza[$row["pizza_id"]]; ?></h2>

                    <h2 class="w3-right"><?php echo $cli[$row["Cli_id"]]; ?></h2>
                    <p></p>
                    <span class="cd-timeline__date"><?php echo $row["date"]; ?></span>

                </div> 
            </div>
            <?php
        } else {
            ?>
            <div class="cd-timeline__block js-cd-block  di" data-id="<?php echo $row["Cmd_ID"]; ?>">
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                </div> 
                <div class="cd-timeline__content js-cd-content">
                    <span class="glyphicon glyphicon-remove remove myicno w3-right"></span>
                    <h2 class="w3-left"><?php echo $pizza[$row["pizza_id"]]; ?></h2>

                    <h2 class="w3-right"><?php echo $cli[$row["Cli_id"]]; ?></h2>
                    <p></p>
                    <span class="cd-timeline__date"><?php echo $row["date"]; ?></span>
                    <img src="src/img/close.png" alt="" class="w3-image im"/>

                </div> 

            </div>
            <?php
        }
    }
    ?>
</div>

<script>
    $(function () {

        $(".remove").click(function () {
            var id = $(this).parents("div.di").data("id");
            $.post("manager/supprimer_cmd.php", {id: id});
        });
    });
</script>



