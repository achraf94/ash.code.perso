
<div class="row w3-padding w3-margin">
    <div class="col-sm-3">
        <select id="project" name="project" class="choosenSeect" data-placeholder="Choose a country..." style="z-index: 999;width: 100%;">
            <?php foreach ($project as $key => $value) { ?>
                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-sm-3"><input type="text" class="form-control" id="statu" name="statu"></div>
    <div class="col-sm-3"><input type="text" class="form-control" id="priority" name="priority"></div>
    <div class="col-sm-3"><input type="text" class="form-control" id="owner" name="owner"></div>
</div>
<div class="row w3-padding w3-margin">
    <div class="col-sm-3"><input type="text" class="form-control" id="team" name="team"></div>
    <div class="col-sm-3"><input type="text" class="form-control" id="categori" name="categori"></div>
    <div class="col-sm-3"><input type="text" class="form-control" id="esclated" name="esclated"></div>
    <div class="col-sm-3"><input type="date" class="form-control" id="duedate" name="duedate"></div>
</div>
<div class="row">
    <div class="col-sm-6" style="background-color: red;">Review</div>
</div>
<div class="row" style="background-color: blue;">
    <div class="col-sm-6">Action_Point</div>
</div>
<div class="row" style="background-color: pink;">
    <div class="col-sm-6">Current_Review</div>
</div>
<div class="row"style="background-color: aqua;">
    <div class="col-sm-6">Review_History</div>
</div>

<script>
    $(function () {
        $(".choosenSeect").chosen();
    });
</script>