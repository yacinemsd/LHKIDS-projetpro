<?php if (isset($_GET['inscription'])) { // si ma variable deleteuserOk existe j'affiche mon alert ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col l12">
                <div class="card-alert card gradient-45deg-cyan-light-green">
                    <div class="card-content white-text center-align">
                        <p><i class="material-icons">check</i>
                            Votre compte a été crée avec succès</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php if (isset($_SESSION['noConnexion'])) { // si ma variable deleteuserOk existe j'affiche mon alert ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col l12">
                <div class="card-alert card gradient-45deg-amber-amber">
                    <div class="card-content white-text center-align">
                        <p>Veuillez vous connecter pour accéder à votre profil</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<div class="container">
  <div class="row">
    <h1 class="center-align" id="formTitle">Espace de connexion</h1>
    <form class="col s12 l6 offset-l3 z-depth-3" id="FormConnexion" class="form" action="" method="POST" role="form">
      <div class="row"><!--row input pseudo-->
        <div class="input-field col s12">
          <input type="text" class="validate " id="pseudo" name="pseudo" tabindex="1" value="">
          <label for="pseudo">Pseudo</label>
          <p class="red-text"><?= isset($pseudoUnknowned) ? $pseudoUnknowned : '' ?></p>
        </div>
      </div><!--fin input pseudo-->
      <div class="row"><!--row mot de passe-->
        <div class="input-field col s12">
          <input type="password" class="validate" id="password" name="password" tabindex="2" value="">
          <label for="password">Mot de passe</label>
          <p class="red-text"><?= isset($passwordIncorrect) ? $passwordIncorrect : '' ?></p>
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
