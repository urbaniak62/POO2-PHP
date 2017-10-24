<?php
include('header.php');

 ?>
 <div class="container">
   <form class=""  method="post">

    <div class="row">
        <div class="input-field col s12">
          <input value=" " name="nom" type="text" class="chat">
          <label class="active" for="nom">Name</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input value=" " name="sexe" type="text" class="sexe">
            <label class="active" for="sexe">sexe</label>
          </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <input value=" " name="age" type="text" class="age">
              <label class="active" for="age">age</label>
            </div>
          </div>
          <div class="row">
              <div class="input-field col s12">
                <input value=" " name="couleur" type="text" class="validate">
                <label class="active" for="couleur">couleur</label>
              </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                  <input type="submit" name="envoyer" type="text" class="envoyer">

                </div>
              </div>
     </form>
     <?php foreach ($chats as $chat): ?>
       <tr>
         <td>Nom : <?php echo $chat['nom']; ?></td><br>
         <td>sexe : <?php echo $chat['sexe']; ?></td><br>
         <td>age : <?php echo $chat['age']; ?></td><br>
         <td>couleur : <?php echo $chat['couleur']; ?></td><br><br>
       </tr>
     <?php endforeach; ?>


 </div>

 <?php
include('footer.php');

  ?>
