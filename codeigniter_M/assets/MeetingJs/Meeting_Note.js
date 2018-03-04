$(function () {
    var rowindex = 1;
    var $this = null, id = null;
    var RowsID = new Array();
    $(".Mselect2").select2();
    var base = $("#base_url").val();
    var idd = 0;
    $("#BodyTab").on("click", ".opacity50", function () {
        $(".Mselect2").select2("destroy");
        var $tr = $("#BodyTab").find('tr.opacity50').clone(true).removeClass('opacity50');
        $tr.find("td.action span.glyphicon-trash").addClass("delete").removeClass("hide");
        $tr.find("td.action span.checkbo").removeClass("hide");
        $tr.find("td.note").attr("contenteditable", "true");
        $tr.find("td.note").attr("tabindex", rowindex);
        $tr.find("td.type select").prop('disabled', false);
        $tr.find("td.projet select").prop('disabled', false);
        $tr.find("td.user select").prop('disabled', false);
        $tr.find("td.date input").prop('disabled', false);
        $tr.find("td.clip span").removeClass("hide");
        $tr.find("td.clip span").removeClass("hide");
        $tr.find("td.clip span").removeClass("hide");
        $.post(base + "upload/addNote", function (id) {
            $("#BodyTab").find("tr").last().before($tr);
            $tr.attr("id", id);
            $(".Mselect2").select2();
        });
        idd++;
        $("#headTab").find("tr th.action .deleteall").removeClass("hide");
    });

    $(".confirm").click(function () {
        id = $("#CurrentDeleteId").val();
        Supprimer(id);
        $('tr#' + id).detach();
        var check = $('.LecheckEnpersonne').length - 1;
        if (check == 0) {
            $("#headTab").find("tr th.action .deleteall").addClass("hide");
        }
        $('#popup-cancel-btn').trigger('click');
    });
    $("#BodyTab").on("click", ".delete", function () {
        $this = $(this);
        id = $this.parents('tr').attr("id");
        $("#CurrentDeleteId").val(id);
    });
    $(".confirmLOT").click(function () {
        var bool = false;
        $("#error").addClass("hide");
        $(".LecheckEnpersonne").each(function () {
            if ($(this).is(":checked")) {
                id = $(this).parents('tr').attr("id");
                $(this).parents('tr').detach();
                Supprimer(id);
                bool = true;
            }
        });
        if (bool == false) {
            $("#error").removeClass("hide");
        } else {
            $("#error").addClass("hide");
            $('#popup-cancel-btn-LOT').trigger('click');
        }
        var check = $('.LecheckEnpersonne').length - 1;
        if (check == 0) {
            $("#headTab").find("tr th.action .deleteall").addClass("hide");
        }
    });
    $("#headTab").on("click", ".deleteall", function () {
//        $(".LecheckEnpersonne").each(function () {
//            if ($(this).is(":checked")) {
//                id = $(this).parents('tr').attr("id");
//                $(this).parents('tr').detach();
//                Supprimer(id);
//            }
//        });
//        var check = $('.LecheckEnpersonne').length - 1;
//        if (check == 0) {
//            $("#headTab").find("tr th.action .deleteall").addClass("hide");
//        }
    });
    function Supprimer(id) {
        $.post(base + "upload/supprimerRowNote/" + id, function () {
        });
    }
    function Update(id, attribut, val) {
        $.post(base + "upload/Update/" + id, {class: attribut, val: val}, function () {
        });
    }


    $("#BodyTab").on("focusout", "td.date input", function () {
        var val = $(this).val();
        id = $(this).parents('tr').attr("id");
        Update(id, "Due_Date", val);
    });
    $("#BodyTab").on("change", "td.user select", function () {
        var val = $(this).val();
        id = $(this).parents('tr').attr("id");
        Update(id, "Owner_ID", val);
    });

    $("#BodyTab").on("change", "td.projet select", function () {
        var val = $(this).val();
        id = $(this).parents('tr').attr("id");
        Update(id, "Project_ID", val);
    });
    $("#BodyTab").on("change", ".Style1sel", function () {
        var val = $(this).val();
        id = $(this).parents('tr').attr("id");
        Update(id, "Note_Type", val);
        switch (val) {
            case 'DECISIONS':
                $(this).css("backgroundColor", "#0984e3");
                break;
            case 'IDEAS':
                $(this).css("backgroundColor", "#636e72");
                break;
            case 'RISKS':
                $(this).css("backgroundColor", "#d63031");
                break;
            case 'ISSUES':
                $(this).css("backgroundColor", "#5352ed");
                break;
            case 'ACTIONS':
                $(this).css("backgroundColor", "#1e90ff");
                break;
            case 'COMMENTS':
                $(this).css("backgroundColor", "#ffa502");
                break;
            case 'LESSONS':
                $(this).css("backgroundColor", "#2ed573");
                break;
        }
    });

    $("#BodyTab").on("click", ".clipselected", function () {
        id = $(this).parents('tr').attr("id");
        $("#CurrentDropzoneId").val(id);
    });
    $(".dropzone").click(function () {
        $("#idnote").val($("#CurrentDropzoneId").val());
    });
});