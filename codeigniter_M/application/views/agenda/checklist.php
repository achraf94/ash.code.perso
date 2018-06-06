<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="<?php echo base_url(); ?>assets/chosen/chosen.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/booststrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/booststrap/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/chosen/chosen.jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/rowsorter/RowSorter.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>assets/ckecklist.css" rel="stylesheet" type="text/css"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    </head>
    <body>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Agenda
        </button>


        <div class="modal fade globModal" id="myModal">
            <div class="modal-dialog sousglobModal " role="document">
                <div class="modal-content header">
                    <div>
                        <span class="fas fa-eye-slash eye styleUni"></span>
                    </div>
                    <h2 style="margin:5px">Agenda</h2>
                    <table class="table w3-margin filtre_agenda">
                        <tr>
                        <tr>
                            <td colspan="3">
                                <button class="btn   btn-block add w3-text-black">ajouter</button>
                            </td>
                        </tr>
                        <td>
                            <div>Item</div>
                            <input type="text" id="item" class="form-control">
                        </td>
                        <td class="w3-center">
                            <div>Duration</div>
                            <input type="text" id="duration"class="form-control duration_input" >
                        </td>
                        <td>
                            <div>Owner</div>
                            <select  id="owner" >
                                <option> Achraf</option>
                                <option> Ibra</option>
                                <option> Maher</option>
                                <option> Nabil</option>
                            </select>
                            <br>
                        </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div id="desc"></div>
                            </td>
                        </tr>
                    </table>
                    <div class="agenda_">
                        <table class="table">
                            <tr>   
                                <td class="w3-left w3-white">
                                    <span>sqmlkqsmlk</span>
                                    <span>sqmlksqmlk</span>
                                    <span>sqmlkqsdmlk</span>

                                    <div class="w3-margin w3-padding w3-right">
                                        <span class="fas fa-arrows-alt styleUni move"></span>
                                        <span class="far fa-trash-alt styleUni del"></span>
                                        <span class="fas fa-pencil-alt styleUni update"></span>
                                        <span class="far fa-save styleUni save hide"></span>
                                    </div>
                                    <br>
                                    <span> qsmldskmslqk</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </body>
    <script>
        $(function () {
            $("#owner").chosen({width: "100%"});
            $("#desc").summernote({height: "240px"});
            $(".eye").click(function () {
                $(this).toggleClass("fas fa-eye-slash fas fa-eye");
                $(".filtre_agenda").toggle("hide");
            });
        });
    </script>
</html>
