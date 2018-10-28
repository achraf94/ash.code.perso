<link rel="stylesheet" href="../assets/node_modules/chosen-js/chosen.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="../assets/node_modules/jquery/dist/jquery.js"></script>
<script src="../assets/node_modules/chosen-js/chosen.jquery.js"></script>
<link rel="stylesheet" href="../assets/CSS/team.css">
<?php
 include "../PHP/cnx.php";
 $reponse=$bdd->query('select * from users');
  ?>


<div style="text-align:center;" class="newItems">
    <b>Users</b>
    <br/>
    <select multiple="multiple" id='Users' class="chosen">
        <?php while ($donnees=$reponse->fetch()){ ?>
        <option value="<?php echo $donnees['User_ID'];?>">
            <?php echo $donnees[ 'Lastname']. " ".$donnees[ 'Firstname'];?>
        </option>
        <?php } ?>
    </select>
    <button class="w3-button w3-blue" id="lookup">
    <span class="fa fa-search w3-padding w3-large "></span>
    </button>
    <button onclick="document.getElementById('id01').style.display='block'"class="w3-button w3-blue"><i class="fa fa-address-card w3-padding w3-large"></i> Add Team</button>
</div>

<div class="container_scrole"></div>





<!-- The Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      <div class="w3-section">
      <label><b>Name Team</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Teams Code" id="name" required>
          <label><b>Description Team</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Teams Description" id="desc" required>
          <label><b>Users</b></label><br>

          <select multiple="multiple" id='Users_ad' class="chosen w3-border w3-margin-bottom">
        <?php 
         $reponse=$bdd->query('select * from users');
        while ($donnees=$reponse->fetch()){ ?>
        <option value="<?php echo $donnees['User_ID'];?>">
            <?php echo $donnees[ 'Lastname']. " ".$donnees[ 'Firstname'];?>
        </option>
        <?php } ?>
    </select>
    <button class="w3-button w3-block w3-green w3-section w3-padding" id="addTeams" type="button">Valid</button>
    <div class="w3-green  w3-padding msg w3-center"></div>

        </div>
    </div>
  </div>
</div>
<script>
    $(function() {
        $(".chosen").chosen({width:300});
        postTeams();
        
        $("#addTeams").click(function(){
            var tab = getValueOfMulti($("#Users_ad"));
            var name = $("#name").val();
            var desc = $("#desc").val();
            postAdd(tab,name,desc);
            postTeams();
            document.getElementById('id01').style.display='none';
        });


        $("#lookup").click(function(){
            var tab = getValueOfMulti($("#Users"));
            postTeams(tab);
        });

        function postTeams(tab){
            $.post("teams.php",{Users:tab},function(data){
            $(".container_scrole").html(data);
        });
        }
        function postAdd(user,name,desc){
            $.post("ajouter.php",{Users:user,name:name,desc:desc},function(data){
            $(".msg").html("OK");
        });
        }
            function getValueOfMulti(select) {
            var tab = [];
            select.each(function() {
            tab.push($(this).val());
            });
            return tab;
  }

    });
</script>