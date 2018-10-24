<?php
include "PHP/cnx.php";
$reponse = $bdd->query('select * from users');
?>
<link rel="stylesheet" href="assets/CSS/listbox.css">
<link rel="stylesheet" href="assets/node_modules/chosen-js/chosen.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="approveTermsContainer">

<div style="text-align:center;" class="newItems">

<b>Viewers</b><br/>

<select multiple="multiple" id='Viewers' class="chosen">
</select>
</div>

<div class="transferBtns">
<input type='button' id='v_btnLeft' value ='  <  ' class="w3-button w3-circle w3-black"/>  <br/>
  <input type='button' id='v_btnRight' value ='  >  ' class="w3-button w3-circle w3-black"/>

</div>
<div style="text-align:center;" class="newItems">
<b >Users</b><br/>
<select multiple="multiple" id='Users' class="chosen">
           <?php
           while ($donnees = $reponse->fetch()){
?>
<option value="<?php echo $donnees['User_ID'];?>"><?php echo $donnees['Lastname']." ".$donnees['Firstname'];?></option>
<?php
           }
           ?>
        </select>
</div>
<div class="transferBtns">
<input type='button' id='m_btnLeft' value ='  <  ' class="w3-button w3-circle w3-teal"/>
<br/>
  <input type='button' id='m_btnRight' value ='  >  ' class="w3-button w3-circle w3-teal"/>

</div>
<div  style="text-align:center;" class="approvedItems">
        <b>Members </b><br/>
        <select multiple="multiple" id='Members' class="chosen">
        </select>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="assets/node_modules/chosen-js/chosen.jquery.js"></script>
<script src="assets/JS/listbox.js"></script>
<script>
$(function(){
    $(".chosen").chosen({width: "300px"});
});
</script>