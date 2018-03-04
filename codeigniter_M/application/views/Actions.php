<link href="<?php echo base_url(); ?>assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
<style>
    .w3-margin-My{
        margin-left: 1px;
    }
    .leWidth{
        width: 200px;
    }
    .cen{
        text-align: center;
    }
    .w3-row a div h2{
        font-size: 1em;
        font-weight: bold;
        transition: font-size 0.3s;
    }
    .w3-row a div:hover h2{
        font-size:1.2em;
    }
    .textOpen{
        background-color: #2980b9;color:white;
    }
    .textClose{
        background-color: #8e44ad;color:white;
    }
    .textProgres{
        background-color: #c0392b;color:white;
    }
    .stylegly{
        color:green;font-size: 1.4em;cursor: pointer;
    }
    .stuck {
        overflow-y: auto;
        height: 700px;
    }
    .critical{
        background-color: rgba(234, 134, 133,0.3);color:black;
    }
    .high{
        background-color: rgba(99, 205, 218,0.3);color:black;
    }
    .meduim{
        background-color: rgba(120, 111, 166,0.3);color:black;
    }
    .low{
        background-color: rgba(120, 111, 166,0.3);color:black;
    }
    .unde{
        background-color: white;color:black;
    }

    hr { 
        height: 30px; 
        border-style: solid; 
        border-color: #8c8b8b; 
        border-width: 1px 0 0 0; 
        border-radius: 20px; 
    } 
    hr:before { 
        display: block; 
        content: ""; 
        height: 30px; 
        margin-top: -31px; 
        border-style: solid; 
        border-color: #8c8b8b; 
        border-width: 0 0 1px 0; 
        border-radius: 20px; 
    }
    .crud{
        color:green;
    }
    .t_vue{
        color: rgba(196, 69, 105,1.0);
    }
    .t_open{
        color:#2980b9;
    }
    .t_close{
        color: #8e44ad;
    }
    .t_prog{
        color: #c0392b;
    }
    .majmo{
        cursor: pointer;
        font-size: 1.4em;
    }

</style>
<div class="loading hide"style="position:absolute;top: 50%; left: 50%;transform: translate(-50%, -50%);">
    <img src="<?php echo base_url(); ?>assets/img/load1.gif" alt=""/>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="w3-row cen" style="padding-left: 18%;">
    <a href="<?php echo base_url();?>index.php/c_raid/action">
        <div class="leWidth w3-container w3-green w3-col w3-margin w3-bottombar w3-border-black">
            <h2>ACTIONS</h2> 
        </div>
    </a>
   <a href="<?php echo base_url();?>index.php/c_raid/risk">
        <div class="leWidth w3-col w3-container w3-red w3-margin">
            <h2>RISKS</h2> 
        </div>
    </a>
    <a href="<?php echo base_url();?>index.php/c_raid/issue">
        <div class="leWidth w3-col w3-container w3-yellow w3-margin">
            <h2>ISSUES</h2> 
        </div>
    </a>
    <a href="<?php echo base_url();?>index.php/c_raid/decision">
        <div class="leWidth w3-col w3-container w3-blue w3-margin">
            <h2>DECISIONS</h2> 
        </div>

    </a>

    <div class="leWidth w3-col" style="text-align: left;padding-top:40px;">
        <span class="glyphicon glyphicon-search stylegly"></span>
        <span class="glyphicon glyphicon-plus stylegly"></span>
        <span class="glyphicon glyphicon-eye-open stylegly"></span>
    </div>

</div>
<div class="w3-container w3-white">
    <h4>Environ  résultats</h4>
    <table>
        <thead>
            <tr>
                <th>dd</th>
                <th>dd</th>
            </tr>
        </thead>
    </table>
</div>
<div class="w3-container  container" style="width: 100%;">
    <div class="row">
        <div class="col-md-4 w3-center">
            <h4 class="w3-padding  w3-round-xxlarge textOpen">Open <span class="w3-right nbropen"></span></h4> <div class="stuck">
                <?php
                $i = 0;
                foreach ($actions as $row) {

                    if ($row->Status_ID == 1) {
                        $i++;
                        ?>
                        <div class="w3-border w3-padding" id="card<?php echo $row->Action_ID; ?>" id-data="<?php echo $row->Action_ID; ?>">
                            <div class="w3-round-large <?php echo setPriority($row->Priority); ?> w3-padding w3-margin">
                                <header >
                                    <span class="w3-left"> <?php echo $project[$row->Project_ID]; ?></span>
                                    <span class="w3-right"><?php echo $row->Due_Date; ?></span>
                                    <br>
                                </header>
                                <hr>
                                <div class="w3-container w3-center">
                                    <?php echo $row->Action_Point; ?>
                                </div>
                                <hr>
                                <header>
                                    <span class="w3-left"> <?php echo $owner[$row->Owner_id]; ?></span>
                                    <span class="w3-right"><?php echo $row->Created_By; ?></span>
                                </header>
                                <br>
                            </div>
                            <header style="padding-left: 10px;padding-right: 10px;">
                                <span class="w3-right glyphicon glyphicon-trash crud majmo"></span>
                                <span class="w3-right glyphicon glyphicon-pencil crud majmo"></span>
                                <span class="w3-right glyphicon glyphicon-comment crud majmo"> </span>
                                <span class="w3-left glyphicon glyphicon-tint t_prog majmo"></span>
                                <span class="w3-left glyphicon glyphicon-tint t_close majmo" > </span>
                                <span class="w3-left glyphicon glyphicon-tint t_vue majmo"></span>
                            </header>
                            <br>
                        </div>
                        <br>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-4 w3-center ">
            <h4 class="w3-padding w3-round-xxlarge textProgres">In progress <span class="w3-right nbrrpo"></span></h4>
            <div class="stuck">
                <?php
                $j = 0;
                foreach ($actions as $row) {
                    
                    if ($row->Status_ID == 3) {
                        $j++;
                        ?>
                        <div class="w3-border w3-padding" id="card<?php echo $row->Action_ID; ?>" id-data="<?php echo $row->Action_ID; ?>">
                            <div class="w3-round-large <?php echo setPriority($row->Priority); ?> w3-padding w3-margin">
                                <header >
                                    <span class="w3-left"> <?php echo $project[$row->Project_ID]; ?></span>
                                    <span class="w3-right"><?php echo $row->Due_Date; ?></span>
                                    <br>
                                </header>
                                <hr>
                                <div class="w3-container w3-center">
                                    <?php echo $row->Action_Point; ?>
                                </div>
                                <hr>
                                <header>
                                    <span class="w3-left"> <?php echo $owner[$row->Owner_id]; ?></span>
                                    <span class="w3-right"><?php echo $row->Created_By; ?></span>
                                </header>
                                <br>
                            </div>
                            <header style="padding-left: 10px;padding-right: 10px;">
                                <span class="w3-right glyphicon glyphicon-trash crud majmo"></span>
                                <span class="w3-right glyphicon glyphicon-pencil crud majmo"></span>
                                <span class="w3-right glyphicon glyphicon-comment crud majmo"> </span>
                                <span class="w3-left glyphicon glyphicon-tint t_close majmo"></span>
                                <span class="w3-left glyphicon glyphicon-tint t_open majmo" > </span>
                                <span class="w3-left glyphicon glyphicon-tint t_vue majmo"></span>
                            </header>
                            <br>
                        </div>
                        <br>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="col-md-4 w3-center ">
            <h4 class="w3-padding w3-round-xxlarge textClose">Close <span class="w3-right nbrclose"></span></h4>
            <div class="stuck">
                <?php
                $k = 0;
                foreach ($actions as $row) {
                    
                    if ($row->Status_ID == 2) {
                        $k++;
                        ?>
                        <div id="card<?php echo $row->Action_ID; ?>" id-data="<?php echo $row->Action_ID; ?>" class="w3-border w3-padding">
                            <div class="w3-round-large <?php echo setPriority($row->Priority); ?> w3-padding w3-margin">
                                <header >
                                    <span class="w3-left"> <?php echo $project[$row->Project_ID]; ?></span>
                                    <span class="w3-right"><?php echo $row->Due_Date; ?></span>
                                    <br>
                                </header>
                                <hr>
                                <div class="w3-container w3-center">
                                    <?php echo $row->Action_Point; ?>
                                </div>
                                <hr>
                                <header>
                                    <span class="w3-left"> <?php echo $owner[$row->Owner_id]; ?></span>
                                    <span class="w3-right"><?php echo $row->Created_By; ?></span>
                                </header>
                                <br>
                            </div>
                            <header style="padding-left: 10px;padding-right: 10px;">
                                <span class="w3-right glyphicon glyphicon-trash majmo crud"></span>
                                <span class="w3-right glyphicon glyphicon-pencil majmo crud"></span>
                                <span class="w3-right glyphicon glyphicon-comment majmo crud"> </span>
                                <span class="w3-left glyphicon glyphicon-tint t_open majmo"></span>
                                <span class="w3-left glyphicon glyphicon-tint t_prog majmo" > </span>
                                <span class="w3-left glyphicon glyphicon-tint t_vue majmo"></span>
                            </header>
                            <br>
                        </div>
                        <br>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</div>

<script>
    $(function () {
        $(".nbropen").text("<?php echo $i; ?>");
        $(".nbrrpo").text("<?php echo $j; ?>");
        $(".nbrclose").text("<?php echo $k; ?>");
        $(document).on({
            ajaxStart: function () {
                $(".loading").removeClass("hide");
            },
            ajaxStop: function () {
                $(".loading").addClass("hide");
            }
        });
        $(".click").click(function () {
            $.post("sousRAID/call_actions.php", function (data) {
                $("#resu").html(data);
            });
        });
    });
</script>

<?php

function setPriority($r) {
    $var = "";
    switch ($r) {
        case "Medium":
            $var = "meduim";
            break;
        case "High":
            $var = "high";
            break;
        case "Low":
            $var = "low";
            break;
        case "Critical":
            $var = "critical";
            break;
        default :
            $var = "unde";
            break;
    }
    return $var;
}
?>
