<!-- formulaire -->
<div class="container">
    <div class="row">
        <h1 class="center-align" id="formTitle">Modification Profil</h1>
        <form class="col s12 z-depth-3" id="FormInscription" class="form" enctype="multipart/form-data" action="#" method="POST" role="form">
            <div class="row">
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="firstname" name="lastname" value="<?= $_SESSION['userInfos']->user_firstname; ?>">
                    <label for="lasttname">Nom</label>
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['lastname'])) {
                                echo $formError['lastname'];
                            }
                            ?></p>
                    </div>
                </div>
                <div class="input-field col s12 l4">
                    <input type="text" class="validate" id="name" name="firstname" value="<?= $_SESSION['userInfos']->user_lastname; ?>">
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
                    <select name="selectuser">                      
                        <option value="<?= $_SESSION['userInfos']->userType_id; ?>"><?= $_SESSION['userInfos']->userType_type; ?></option>
                        <?php
                        foreach ($type as $value) {
                            ?>
                            <option value="<?= $value->userType_id ?>"><?= $value->userType_type ?></option>                           

                        <?php }
                        ?>
                    </select>
                    <label>Vous êtes :</label>                    
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['selectuser'])) {
                                echo $formError['selectuser'];
                            }
                            ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col  s12 l6">
                    <input  class="validate" type="email"  id="mail" name="mail" tabindex="4" value="<?= $_SESSION['userInfos']->user_mail; ?>">
                    <label for="mail">Adresse Mail</label>                   
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['mail'])) {
                                echo $formError['mail'];
                            }
                            ?></p>
                    </div>
                </div>
                <div class="input-field col s12 l6">
                    <input class="validate" type="text" id="pseudo" name="pseudo" value="<?= $_SESSION['userInfos']->user_pseudo; ?>">
                    <label for="pseudo">Pseudo</label>                   
                    <div>
                        <p class="inputError"><?php
                            if (isset($formError['pseudo'])) {
                                echo $formError['pseudo'];
                            }
                            ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="input-field">
                        <textarea type="text" id="textarea" name="reasons" class="materialize-textarea"><?= $_SESSION['userInfos']->user_reasons ?></textarea>
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
                <div class="input-field col s12 l6">
                    <input class="validate" type="password" id="password" name="password" value="">
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
                    <input class="validate" type="password" id="confirm" name="confirm" value="">
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
                    <div class="file-field input-field">
                        <div class="btn grey lighten-1">
                            <span>Image de profil</span>
                            <input name="image" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="" value="<?= $_SESSION['userInfos']->user_image; ?>">
                        </div>
                        <p class="inputError"><?php
                            if (isset($formError['image'])) {
                                echo $formError['image'];
                            }
                            ?></p>
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
        </form>
    </div>
</div>
