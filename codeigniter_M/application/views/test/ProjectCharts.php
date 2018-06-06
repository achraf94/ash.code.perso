<!DOCTYPE HTML>
<html>
    <head>
        <link href="<?php echo base_url(); ?>assets/chosen/chosen.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <input  id="baseurl"type='hidden' value="<?php echo base_url(); ?>">
        <table class="table table-bordered">
            <tr>
                <td>
                    <select class="click form-control choosen" style="width: 30%;">
                        <option></option>
                        <?php foreach ($project as $key => $value) {
                            ?>
                            <option value="<?php echo $key; ?>"> <?php echo $value; ?> </option>
                        <?php }
                        ?>
                    </select>
                </td>
                <td>
                    <select class="mucli form-control choosen" style="width: 30%;" multiple="">

                        <?php foreach ($project as $key => $value) {
                            ?>
                            <option value="<?php echo $key; ?>"> <?php echo $value; ?> </option>
                        <?php }
                        ?>
                    </select>
                </td>
            </tr>
        </table>

        <div class="contain"></div>

        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/chosen/chosen.jquery.js" type="text/javascript"></script>
        <script>

            $(function () {
                $(".choosen").chosen({width: "100%"});
                $(".click").change(function () {
                    var base = $("#baseurl").val();
                    $.post(base + "index.php/c_raid/loaddata/", {mode: 'single', id: this.value}, function (data) {
                        $(".contain").html(data);
                    });
                });
                $(".mucli").change(function () {
                    var base = $("#baseurl").val();
                    $.post(base + "index.php/c_raid/loaddata/", {mode: 'milti', id: $(".mucli").val()}, function (data) {
                        $(".contain").html(data);
                    });
                });

            });

        </script>
    </body>
</html>

