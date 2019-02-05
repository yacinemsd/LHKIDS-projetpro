<p class="center-align green lighten-2"><?= isset($_GET['inscription']) ? 'Le compte a bien été créé' : '' ?></p>
<div class="container">
  <div class="row">
    <h1 class="center-align" id="formTitle">Espace de connexion</h1>
    <form class="col s12 l6 offset-l3 z-depth-3" id="FormConnexion" class="form" action="" method="POST" role="form">
      <div class="row"><!--row input pseudo-->
        <div class="input-field col s12">
          <input type="text" class="validate " id="pseudo" name="pseudo" tabindex="1" value="">
          <label for="pseudo">Pseudo</label>
        </div>
      </div><!--fin input pseudo-->
      <div class="row"><!--row mot de passe-->
        <div class="input-field col s12">
          <input type="text" class="validate" id="password" name="password" tabindex="2" value="">
          <label for="password">Mot de passe</label>
          <p><?= isset($passwordIncorrect) ? $passwordIncorrect : '' ?></p>
        </div>
      </div><!--fin row mot de passe-->
      <div class="row"><!--row bouton submit-->
        <div class="col s12 center-align">
          <button  id="sendConnexion" class="btn waves-effect waves-light yellow darken-3" type="submit" name="submitConnexion">Connexion
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div><!-- fin row bouton submit-->
    </form>
  </div>
</div>
