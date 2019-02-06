
<!-- formulaire -->
<div class="container">
    <div class="row">
        <h1 class="center-align" id="formTitle">Modification Profil</h1>
        <form class="col s12 z-depth-3" id="FormInscription" class="form" action="#" method="POST" role="form">
            <div class="row">
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="firstname" name="lastname" value="<?= $_SESSION['userInfos']->user_firstname; ?>">
                    <label for="lasttname">Nom</label>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="name" name="firstname" value="<?= $_SESSION['userInfos']->user_lastname; ?>">
                    <label for="firstname">Prénom</label>
                </div>

                <div class="input-field col s12 l4">
                    <select name="selectuser">

                                       
                        </select>
                        <label>Vous êtes :</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col  s12 l6">
                        <input  class="validate" type="email"  id="email" name="email" value="<?= $_SESSION['userInfos']->user_mail; ?>" > <!-- si $_POST['email'] existe je l'affiche sinon(?) j'affiche $_POST['email'] avec une chaine de caractère vide. -->
                        <label for="email">Adresse Mail</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input class="validate" type="text" id="pseudo" name="pseudo" value="<?= $_SESSION['userInfos']->user_pseudo; ?>">
                        <label for="pseudo">Pseudo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <input class="validate" type="password" id="password" name="password" value="<?= $_SESSION['userInfos']->user_password; ?>">
                        <label for="password">Mot de passe</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input class="validate" type="password" id="confirm" name="confirm" value="">
                    <label for="confirm">Confirmez votre mot de passe</label>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="file-field input-field">
                        <div class="btn grey lighten-1">
                            <span>Image de profil</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Choisissez une image de profil (facultatif)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center-align">
                    <button  id="buttonSend" class="btn waves-effect waves-light yellow darken-3" type="submit" name="submitUpdateUser">Confirmer les mofifications
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form></div>
</div>
