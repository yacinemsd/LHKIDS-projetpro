<!-- formulaire -->
<div class="container">
    <div class="row">
        <h1 class="center-align" id="formTitle">Formulaire d'inscription</h1>

        <form class="col s12 z-depth-3" id="FormInscription" class="form" action="#" method="POST" role="form">
            <div class="row">
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="lastname" name="lastname" tabindex="1" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
                    <label for="lastname">Nom</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['lastname'])) {
                                echo $formError['lastname'];
                            }
                            ?></p>
                    </div>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="firstname" name="firstname"  tabindex="2" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                    <label for="firstname">Prénom</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['firstname'])) {
                                echo $formError['firstname'];
                            }
                            ?></p>
                    </div>
                </div>

                <div class="input-field col s12 l4">
                    <select>
                        <option value=" " disabled selected></option>
                        <option value="1">Papa</option>
                        <option value="2">Maman</option>
                        <option value="4">Tonton</option>
                        <option value="5">Tata</option>
                        <option value="6">Papi</option>
                        <option value="7">Mami</option>
                        <option value="8">Nounou</option>
                        <option value="9">Autres</option>
                    </select>
                    <label>Vous êtes :</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col  s12 l6">
                    <input  class="validate" type="email"  id="email" name="email" tabindex="4" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" > <!-- si $_POST['email'] existe je l'affiche sinon(?) j'affiche $_POST['email'] avec une chaine de caractère vide. -->
                    <label for="email">Adresse Mail</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['mail'])) {
                                echo $formError['mail'];
                            }
                            ?></p>
                    </div>
                </div>
                <div class="input-field col s12 l6">
                    <input class="validate" type="text" id="pseudo" name="pseudo" tabindex="5" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : ''; ?>">
                    <label for="pseudo">Pseudo</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['mail'])) {
                                echo $formError['mail'];
                            }
                            ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6">
                    <input class="validate" type="text" id="password" name="password" tabindex="6" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                    <label for="password">Mot de passe</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['password'])) {
                                echo $formError['password'];
                            }
                            ?></p>
                    </div>
                </div>
                <div class="input-field col s12 l6">
                    <input class="validate" type="text" id="confirm" name="confirm" tabindex="6" value="<?= isset($_POST['confirm']) ? $_POST['confirm'] : ''; ?>">
                    <label for="confirm">Confirmez votre mot de passe</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['confirm'])) {
                                echo $formError['confirm'];
                            }
                            ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="input-field">
                        <textarea type="text" id="textarea1" name="reasons" class="materialize-textarea"></textarea>
                        <label for="textarea1">Motif d'inscription</label>
                        <div>
                            <?php
                            if (isset($formError['reasons'])) {
                                echo $formError['reasons'];
                            }
                            ?>
                        </div>
                    </div>
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
                    <button  id="buttonSend" class="btn waves-effect waves-light yellow darken-3" type="submit" name="submitCreateUser">Envoyer !
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
