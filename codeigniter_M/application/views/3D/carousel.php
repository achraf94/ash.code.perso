<link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/CSS/tchat.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/autocomplete/easy-autocomplete.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/jR3DCarousel/jR3DCarousel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/autocomplete/jquery.easy-autocomplete.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FlipAnimation/flip.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/mCustomScrollbar/jquery.mCustomScrollbar.js" type="text/javascript"></script>
<style>
    .jR3DCarouselGalleryCustomeTemplate {
        margin-left: 35%;
        margin-top: 3%;
    }
    .jR3DCarouselGalleryCustomeTemplate .captions{
        position: relative;
        padding: 4px 0;
        bottom: 27px;
        background: #ec1c8e;
        display:block			
    }
    .iconpr{
        font-size: 1.9em;
        cursor: pointer;
        color:#10ac84;
    }
</style>
<input type="hidden" value="<?php echo base_url(); ?>" id="baseurl">
<input type="hidden" value="<?php echo $moi; ?>" id="connecter">

<div style="padding-right: 10%; padding-top: 10px;position: absolute;">
    <a  href="http://localhost:8081/ash.code.perso/codeigniter_m/index.php/c_raid/destroy/"class="btn btn-block btn-danger btn-cancel">Decconecter</a>
</div>
<div style="padding-left: 90%; padding-top: 10px;">

    <img src="<?php echo base_url(); ?>assets/img/<?php echo $photo; ?>" style="width: 140px;height: 100px;position: absolute;">
</div>
<div class="contain">
    <div class="w3-center" style="padding-left: 40%;padding-top: 40px;">
        <input style="width: 300px;"id="names" type="text" class="form-control">  
    </div>

    <div class="jR3DCarouselGalleryCustomeTemplate">
        <?php
        foreach ($user as $row) {
            ?>
            <div  id="card<?php echo $row->User_ID; ?>"class="jR3DCarouselCustomSlide w3-padding w3-margin w3-border" data-id="<?php echo$row->User_ID; ?>">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo $row->Picture; ?>" alt=""/>
                    <div class="card-body">
                        <span data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-envelope msg iconpr w3-right"></span>
                        <h2 class="card-title w3-center"><?php echo $row->Firstname . " " . $row->Lastname; ?></h2>
                        <span class="w3-center"> <?php echo $row->Email; ?> </span>
                        <span class="w3-left"> <?php echo $row->Role; ?> </span>
                        <span class="w3-right"> <?php echo $row->Market; ?> </span>
                    </div>
                </div>   
                <div class="Data"></div>
            </div>

            <?php
        }
        ?>


    </div>
</div>  


<script>
    $(function () {
        var user = [];
        var base = $("#baseurl").val();
        var j3D = setUp();
        var options = {
            url: base + "index.php/c_raid/UserToJson",
            getValue: "name",
            list: {
                onChooseEvent: function () {
                    var ite = $("#names").getSelectedItemData().ID;
                    reset(j3D);
                    setSlide(getIndex(ite));
                },
                match: {
                    enabled: true
                }
            },
            theme: "plate-dark"
        };
        $(".msg").click(function () {
            var idUser = $(this).parents("div.jR3DCarouselCustomSlide").data("id");
            setInterfacemsg(idUser);
        });
        $("#names").easyAutocomplete(options);
        function setSlide(e) {
            for (var i = 0; i < e; i++) {
                j3D.showNextSlide();
            }
        }
        function getIndex(ind) {
            user = [];
            user = setUsers();
            var index = -1;
            for (var k in user) {
                if (user[k]["id"] === ind)
                    index = user[k]["index"];
            }
            return index;
        }
        function reset(vari) {
            var cur = vari.getCurrentSlide();
            var index = cur.data("index");
            for (var i = index; i > 0; i--) {
                j3D.showPreviousSlide();
            }
        }

        function setUsers() {
            var user = [];
<?php
$i = 0;
foreach ($user as $row) {
    ?>
                user.push({index: "<?php echo $i; ?>", id: "<?php echo $row->User_ID; ?>"});
    <?php
    $i++;
}
?>
            return user;
        }
        function setUp() {
            var CONFIG = {
                width: 400, /* largest allowed width */
                height: 400, /* largest allowed height */
                slideLayout: 'fill', /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
                animation: 'slide3D', /* slide | scroll | fade | scroll3D | zoomInScroll */
                animationCurve: 'ease',
                animationDuration: 1900,
                animationInterval: 2000,
                slideClass: 'jR3DCarouselCustomSlide',
                autoplay: false,
                controls: true, /* control buttons */
                navigation: ''			/* circles | squares | '' */,
                perspective: 100,
                rotationDirection: 'ltr'
            };
            var myjR3DCarousel = $('.jR3DCarouselGalleryCustomeTemplate').jR3DCarousel(CONFIG);
            return myjR3DCarousel;
        }
        function setInterfacemsg(idUser) {
            $.post(base + "index.php/c_raid/TchatC/" + idUser, function (data) {
                $("#myModal").find(".modal-body").html(data);
            });
        }

    });
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-body "></div>

    </div>
</div>
