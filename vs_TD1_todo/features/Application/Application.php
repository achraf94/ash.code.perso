<?php include "../header.php";?>
<script src="apps.js"></script>
<script src="features.js"></script>

<script src="suivi.js"></script>
<style>
.contain{
    margin:100px;
}
.jtable-title-text{
  font-size:1.3em;
  text-align:center;
}
</style>

<div class="container">
    <h1 class="w3-center" >Version management</h1>
  <ul class="nav nav-tabs">
    <li> <a class="refresh w3-blue apsclas set" data-toggle="tab" href="#Aps">Application</a> </li>
    <li> <a class="refresh set"data-toggle="tab" href="#Ftrs"> Features</a> </li>
    <li> <a class="refresh set"data-toggle="tab" href="#suivi"> Suivi versioning</a> </li>
  </ul>

  <div class="tab-content">

    <div id="Aps" class="tab-pane fade ">
      
      <div class="active">
            <p id="application"></p>
      </div>
    </div>  

    <div id="Ftrs" class="tab-pane fade">
      <div>
            <div id="Features"></div>
      </div>
      
    </div>

        <div id="suivi" class="tab-pane fade">
      <div>
            <div id="suiviv"></div>
      </div>
      
    </div>

  </div>
</div>

<script>
$(function(){
  $(".apsclas").click();
  $(".set").click(function(){
    $(".set").each(function(){
        $(this).removeClass("w3-blue");
      });
      $(this).addClass("w3-blue");
  });

});

</script>