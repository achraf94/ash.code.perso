<?php
$url = base_url() . "application/third_party/img/";
?>
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
        var url_Upload = base + "index.php/c_raid/upload";
        var url_delete = base + "index.php/c_raid/delete";

        $("#input-704").fileinput({
        uploadUrl: url_Upload,
                uploadAsync: false,
                minFileCount: 1,
                maxFileCount: 20,
                showUpload: false,
                showRemove: false,
                initialPreview: [
<?php foreach ($images as $row) { ?>
                    "<img src='<?php echo $url . $row->name; ?>' height='120px' class='file-preview-image'>",
<?php } ?>],
                initialPreviewConfig: [<?php
foreach ($images as $image) {
    ?>
                    {caption: "<?php echo $image->name; ?>", height: "120px", url: url_delete, key:"<?php echo $image->id_file; ?>"},
<?php } ?>
                ]
    });
    });
</script>