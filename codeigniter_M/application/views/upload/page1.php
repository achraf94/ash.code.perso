<style>
    .file-preview{
        height: 300px;
    }
</style>
<input type="hidden" id="base" value="<?php echo base_url(); ?>">
<div class="form-group">
    <div class="file-loading">
        <input id="input-704" name="file[]" type="file" multiple>
    </div>
</div>

<script>
    $(function () {
        var base = $("#base").val();
        $("#input-704").fileinput({
            uploadUrl: base + "index.php/c_raid/fileUpload",
            uploadAsync: false,
            overwriteInitial: false,
            initialPreviewAsData: true
        });

    });
</script>