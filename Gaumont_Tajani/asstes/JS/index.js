$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    var C3D = set3D(), user = [], options = {
        url: "../PHP/JSON/films.php",
        getValue: "nom",
        list: {
            onChooseEvent: function () {
                var ite = $("#names").getSelectedItemData().id;
                reset(C3D);
                setSlide(getIndex(ite));
            },
            match: {
                enabled: true
            }
        },
        theme: "plate-dark"
    };
    $("#names").easyAutocomplete(options);
    $(".reserver").click(function () {
        var id = $(this).parents(".divcarousel").data("id");
        $.post("../PHP/visualiser.php", {id: id}, function (data) {
            $(".sieges").html("").delay(1000).html(data);
        });
    });
    $("#reset").click(function () {
        $(".sieges").html("<br><br><br><br><br><br>");
    });
    function setSlide(e) {
        for (var i = 0; i < e; i++) {
            C3D.showNextSlide();
        }
    }
    function getIndex(ind) {
        user = [];
        user = JSON.parse($("#dataFilm").val());

        var index = -1;
        for (var k in user) {

            if (user[k]["id"] === parseInt(ind))
                index = user[k]["index"];

        }
        return index;
    }
    function reset(vari) {
        var cur = vari.getCurrentSlide();
        var index = cur.data("index");
        for (var i = index; i > 0; i--) {
            C3D.showPreviousSlide();
        }
    }

    function set3D() {
        var carouselCustomeTemplateProps = {
            width: 300, /* largest allowed width */
            height: 300, /* largest allowed height */
            slideLayout: 'fill', /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
            animation: 'slide3D', /* slide | scroll | fade | scroll3D | zoomInScroll */
            animationCurve: 'ease',
            animationDuration: 1900,
            animationInterval: 2000,
            slideClass: 'divcarousel',
            autoplay: false,
            controls: true, /* control buttons */
            navigation: ''			/* circles | squares | '' */,
            perspective: 2000,
            rotationDirection: 'ltr'
        };
        var myjR3DCarousel = $('.carousel').jR3DCarousel(carouselCustomeTemplateProps);
        return  myjR3DCarousel;
    }




});