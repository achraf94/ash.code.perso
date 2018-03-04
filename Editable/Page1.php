<link href="../assets/BooEdit114/libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../assets/BooEdit114/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css"/>
<script src="../assets/BooEdit114/libs/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="../assets/BooEdit114/libs/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../assets/BooEdit114/bootstrap-editable/js/bootstrap-editable.js" type="text/javascript"></script>
<div style="padding-top: 100px; text-align: center;">
    <table id="user" class="table table-bordered table-striped">
        <tbody> 
            <tr>         
                <td width="30%">Username</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="username" data-original-title="Enter username"></a></td>
            </tr>
            <tr>         
                <td>First name</td>
                <td><a href="#" class="myeditable" data-type="text" data-name="firstname" data-original-title="Enter your firstname"></a></td>
            </tr>  
            <tr>         
                <td>Group</td>
                <td><a href="#" class="myeditable" data-type="select" data-name="group" data-source="groups.php" data-original-title="Select group"></a></td>
            </tr>     
            <tr>         
                <td>Date of birth</td>
                <td><a href="#" class="myeditable" data-type="date" data-name="dob" data-viewformat="dd/mm/yyyy" data-original-title="Select Date of birth"></a></td>
            </tr>  
            <tr>         
                <td>Comments</td>
                <td><a href="#" class="myeditable" data-type="textarea" data-name="comments" data-original-title="Enter comments"></a></td>
            </tr> 
        </tbody>
    </table>
    <button id="save-btn"class="btn btn-danger">
        Add
    </button>
    <div id="msg">

    </div>
</div>
<script>
    $(function () {
        $(".myeditable").editable();
        $('#save-btn').click(function () {
            var data, $elems = $('.myeditable'), errors = $elems.editable('validate'); //run validation for all values
            data = $elems.editable('getValue');
            $.post("attach.php",{data:data});
            
        });
    });
</script>