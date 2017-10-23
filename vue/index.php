<?php
include('header.php');
 ?>
<form class=""  method="post">

 <div class="row">
     <div class="input-field col s6">
       <input value=" " name"nom" type="text" class="chat">
       <label class="active" for="nom">Name</label>
     </div>
   </div>
   <div class="row">
       <div class="input-field col s6">
         <input value=" " name="sexe" type="text" class="sexe">
         <label class="active" for="sexe">sexe</label>
       </div>
     </div>
     <div class="row">
         <div class="input-field col s6">
           <input value=" " name="age" type="text" class="age">
           <label class="active" for="age">age</label>
         </div>
       </div>
       <div class="row">
           <div class="input-field col s6">
             <input value=" " name="couleur" type="text" class="validate">
             <label class="active" for="couleur">couleur</label>
           </div>
         </div>
         <div class="row">
             <div class="input-field col s6">
               <input type="submit" name="envoyer" type="text" class="envoyer">
               <!-- <label for="envoyer">envoyer</label> -->
             </div>
           </div>
  </form>

 <?php
include('footer.php');

  ?>
