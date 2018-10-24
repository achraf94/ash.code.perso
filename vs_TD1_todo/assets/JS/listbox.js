$(document).ready(function() {
    $('#v_btnLeft').click(function(e) {
        console.log("#Users  to #Viewers")
        setTo("Users","Viewers",e);
    });

    $('#v_btnRight').click(function(e) {
        console.log("#Viewers to #Users")
        setTo("Viewers","Users",e);
    });

    //------------------------------------
    $('#m_btnRight').click(function(e) {
        console.log("#Users to #Members")
        setTo("Users","Members",e);
    });

    $('#m_btnLeft').click(function(e) {
        console.log("#Members to #Users")
        setTo("Members","Users",e);
    });

    function setTo(idcome,idto,e){
        var selectedOpts = $('#'+idcome+' option:selected');
        if (selectedOpts.length == 0) {
            alert("Nothing to move.");
            e.preventDefault();
        }

        $('#'+idto).append($(selectedOpts).clone()).trigger("chosen:updated");
        $(selectedOpts).remove().trigger('chosen:updated');
        $('#'+idcome).chosen('destroy');
        selectedOpts.remove();
        $('#'+idcome).chosen({width: "300px"});

        e.preventDefault();
    }

});
