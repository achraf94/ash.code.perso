
<link href="../assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="../assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../assets/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="../assets/SummerNote/summernote.js" type="text/javascript"></script>
<link href="../assets/4w/4w.css" rel="stylesheet" type="text/css"/>
<style>
    table tr td{
        padding: 10px;
        text-align: center;
    }
    table tr th{
        padding: 10px;
        text-align: center;
    }
</style>
<input type="hidden" id="currentRow">


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div style="background-color: red;height: 300px;"class="summer" >

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="aply">Apply</button>
            </div>
        </div>
    </div>
</div>
<table class="table" style="width: 700px;">
    <thead>
        <tr>
            <th>

                <span class="glyphicon glyphicon-plus plus" style="color: red;"></span>
            </th>
            <th>
                Type
            </th>
            <th>
                Note
            </th>
        </tr>
    </thead>
    <tbody id="bodyTab">
        <tr class="hide">
            <td>
                <button type="button" class="cl btn btn-info" data-toggle="modal" data-target="#myModal">
                    summer
                </button>

            </td>
            <td>
                <select >
                    <option>ACTIONS</option>
                    <option>ISSUES</option>
                    <option>RISKS</option>
                </select>
            </td>
            <td class="note">

            </td>
        </tr>
    </tbody>
</table>

<button class="btn btn-danger set">Set</button>
<button class="btn btn-indo get">Get</button>
<div id="resu">

</div>
<script>
    $(document).ready(function () {
//currentRow
        $(".cl").click(function () {
            var id = $(this).parents("tr").attr("id");
            $("#currentRow").val(id);
        });
        $("#aply").click(function () {
            var $tr = $("#currentRow").val();
            $("#bodyTab tr.newOne").each(function () {
                if ($(this).attr("id") == $tr) {
                     $(this).find("td.note").html($(".summer").summernote("code"));

                }
            });
        });
        $('.summer').summernote();
        $(".set").click(function () {
            $(".summernote").each(function () {
                var markupStr = $(this).summernote('code');
                $.post("insert.php", {note: markupStr, ac: "ACTIONS"}, function (data) {

                });
            });
        });
        $(".get").click(function () {
            $.post("select.php", function (data) {
                $("#resu").html(data);
            });
        });
        var idd = 0;
        $(".plus").click(function () {
            var $tr = $("#bodyTab").find("tr.hide").clone(true).removeClass("hide").addClass("newOne");
            $tr.find("td.note").prop("contenteditable", "true");
            $tr.attr("id", idd++);
            $("#bodyTab").find("tr").last().before($tr);

        });
    });
    $('.summernote').summernote();
    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "file.php",
            cache: false,
            contentType: false,
            processData: false,
            success: function (url) {
                editor.insertImage(welEditable, url);
            }
        });
    }
</script>

