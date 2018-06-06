<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
         <link href="<?php echo base_url(); ?>assets/CSS/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>assets/JS/jquery1.12.4.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
        <style>
        body{
            background-color: rgba(22,100,100,0.5);
        }
        </style>
    </head>
    <body>
        <section class="cd-timeline js-cd-timeline">
            <div class="cd-timeline__container">
                <?php foreach ($actions as $value) {
                   ?>
                    <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                    </div> 
                    <div class="cd-timeline__content js-cd-content">
                        <h2><?php echo $value->Action_Num;?></h2>
                        <p><?php echo $value->Action_Point;?></p>
                        <span class="cd-timeline__date"><?php echo $value->Due_Date;?></span>
                    </div> 
                </div>
                   <?php
                }?>

            </div>
        </section>
        <script src="<?php echo base_url(); ?>assets/JS/main.js" type="text/javascript"></script>
    </body>
</html>
