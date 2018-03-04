<link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/slide1.png" alt="First Slide">
        </div>
        <div class="item">
            <img src="images/slide2.png" alt="Second Slide">
        </div>
        <div class="item">
            <img src="images/slide3.png" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a  href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a  href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>