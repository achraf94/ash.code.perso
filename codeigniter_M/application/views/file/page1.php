<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Cute file browser</title>

    </head>
    <body>
        <?php
        foreach ($file as $row) {
            if ($row["type"] == "folder") {
                echo "<h1>" . $row["name"] . "</h1>";
                $url = base_url() . "index.php/assets/filesBrowser/" . $row["name"] . "/";
                foreach ($row["items"] as $item) {
                    echo "<a href='" . $url . "" . $item["name"] . "'>" . $item["name"] . "</a><br>";
                    echo "".$item["path"];
                }
            }
            if ($row["type"] == "file ") {
                echo $row["path"] . "<br>";
            }
        }
        ?>


        <script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/filesBrowser/js/script.js" type="text/javascript"></script>
    </body>
</html>