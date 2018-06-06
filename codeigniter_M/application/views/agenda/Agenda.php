<link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link href="<?php echo base_url(); ?>assets/chosen/chosen.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/booststrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/booststrap/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/chosen/chosen.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/rowsorter/RowSorter.js" type="text/javascript"></script>
<style>
    .styleUni{
        font-weight: bold;
        font-size: 1.4em;
        cursor: pointer;
    }

    .add{
        color: #63cdda;
    }
    .del{
        color: #c44569;
    }
    .update{
        color: #546de5;
    }
    .move{
        color: #574b90;cursor: grab;
    }  
    .save{
        color: #596275;
    }  
    #tab{
        margin: 10px;
        width: 100%; table-layout:fixed;
    }
    #tab tr td{
        position:relative;
        vertical-align: top;
        width:100%;
        height:100%;
        min-height:100px;
        margin: 0;
        padding:0;    
        word-wrap:break-word;
    }
    [contenteditable="true"] {background-color: #A3CB38;  }
    [contenteditable="true"]:hover { background-color:#A3CB38;}
</style>
<input id="base" value="<?php echo base_url(); ?>"type="hidden">
<input id="trId" type="hidden">
<table class="table w3-margin" id="tab">
    <thead>
        <tr>
            <th class="w3-center">
                Item
            </th>
            <th class="w3-center">
                Description
            </th>
            <th class="w3-center">
                Duration
            </th>
            <th class="w3-center">
                <span class="fas fa-plus-square styleUni add"></span>
            </th>
        </tr>
    </thead>
    <tbody id="body_tab">

    </tbody>
    <tfoot class="foot_hide">
        <tr class="hide w3-animate-left">
            <td class=" item"></td>
            <td class="desc"></td>
            <td class=" duration"></td>
            <td class="w3-center">
                <span class="fas fa-arrows-alt styleUni move"></span>
                <span class="far fa-trash-alt styleUni del"></span>
                <span class="fas fa-pencil-alt styleUni update"></span>
                <span class="far fa-save styleUni save hide"></span>
            </td>
        </tr>
    </tfoot>
</table>
<script>
    $(function () {
        var i = 0;
        var base = $("#base").val(), obj;
        $(".add").click(function () {
            var $tr = $(".foot_hide").find("tr.hide").clone(true).removeClass("hide");
            $.post(base + "index.php/c_raid/initAgenda", function (data) {
                obj = JSON.parse(data);
                $("#trId").val(obj["idAgenda"]);
            });
            $tr.attr("id", i++);
            $tr.data("id", $("#trId").val());
            $("#body_tab").append($tr);
            console.log($tr.attr("id"));
            console.log($tr.data("id"));
        });
        $(".update").click(function () {
            var id = $(this).parents("tr").attr("id");
            var id_A = $(this).parents("tr").data("id");
            console.log("Update_ID_" + id);
            $(this).addClass("hide");
            $("#" + id).find("span.save").removeClass("hide");
            set_edit($("#" + id));
            console.log("Update_Data==>" + id_A);
        });
        $(".save").click(function () {
            var id = $(this).parents("tr").attr("id");
            console.log(id);
            $(this).addClass("hide");
            $("#" + id).find("span.update").removeClass("hide");
            save_edit($("#" + id));
        });
        function set_edit(e) {
            e.find(".item").attr("contenteditable", "true");
            e.find(".desc").attr("contenteditable", "true");
            e.find(".duration").attr("contenteditable", "true");
        }
        function save_edit(e) {
            e.find(".item").attr("contenteditable", "false");
            e.find(".desc").attr("contenteditable", "false");
            e.find(".duration").attr("contenteditable", "false");
        }

    });
</script>