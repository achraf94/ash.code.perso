<link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/Kartik/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/Kartik/js/fileinput.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

<input type="hidden" id="base" value="<?php echo base_url(); ?>">
<input id="file" name="imagenes[]" type="file" multiple=true class="file-loading">
<script>
    $("#archivos").fileinput({
    uploadUrl: base + "index.php/c_raid/fileUpload",
            uploadAsync: false,
            minFileCount: 1,
            maxFileCount: 20,
            showUpload: false,
            showRemove: false,
            initialPreview: [
<?php foreach ($images as $image) { ?>
                "<img src='<?php echo $image; ?>' height='120px' class='file-preview-image'>",
<?php } ?>],
            initialPreviewConfig: [<?php foreach ($images as $image) {
    $infoImagenes = explode("/", $image);
    ?>
                {caption: "<?php echo $infoImagenes[1]; ?>", height: "120px", url: "borrar.php", key:"<?php echo $infoImagenes[1]; ?>"},
<?php } ?>]
    }).on("filebatchselected", function(event, files) {

    $("#archivos").fileinput("upload");
    });

</script>