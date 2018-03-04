<link href="../../assets/3w/3w.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="../../assets/JS/jquery-3.2.1.js" type="text/javascript"></script>
<script src="../../assets/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>
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
</style>
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
            <a class="navbar-brand" href="#">T-est</a>
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
    <a href="Actions.php">
        <div class="leWidth w3-container w3-green w3-col w3-margin">
            <h2>ACTIONS</h2> 
        </div>
    </a>
    <a href="Risks.php">
        <div class="leWidth w3-col w3-container w3-red w3-margin">
            <h2>RISKS</h2> 
        </div>
    </a>
    <a href="Issues.php">
        <div class="leWidth w3-col w3-container w3-yellow w3-margin">
            <h2>ISSUES</h2> 
        </div>
    </a>
    <a href="Decision.php">
        <div class="leWidth w3-col w3-container w3-blue w3-margin w3-bottombar w3-border-black">
            <h2>DECISIONS</h2> 
        </div>
    </a>
</div>
<div class="w3-container w3-blue">
    <p style="text-align: center;">DATA DECISIONS</p>
</div>