<!-- profile-page-header -->
<?php
if (!isset($_SESSION['userInfos'])) {
    $_SESSION['noConnexion'] = true;
    header('Location: index.php?page=connexion');
    exit();
}
?>
<div class="container-fluid">
    <div class="row imgbackProfil center-align">
        <div class="col s2">
            <img src="../images/iconprofil.svg" alt="profile image" class="circle z-depth-3 imgprofil">
        </div>
        <div class="col s3 center-align divTitleProfile">
            <div class="profiletitle">
                <p><?= $_SESSION['userInfos']->user_firstname; ?></p>
            </div>
            <div class="profiletitle2">
                <p><?= $_SESSION['userInfos']->userType_type; ?></p>
            </div>
        </div>
        <div class="col s3 center-align divTitleProfile">
            <div class="profiletitle">
                <p>Mes sorties</p>
            </div>
            <div class="profiletitle2">
                <p>0</p>
            </div>
        </div>
        <div class="col s3 center-align divTitleProfile">
            <div class="profiletitle center-align">
                <p>Mes Favoris</p>
            </div>
            <div class="profiletitle2 center-align">
                <p>0</p>
            </div>
        </div>
        <div class="col s1">
            <a  id="btnprofile" class="btn-floating btn waves-effect waves-light orange z-depth-2"><i class="material-icons">add</i></a>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['modifok'])) { // si ma variable modif ok existe j'affiche mon alert ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col l4 offset-l7">
                <div class="card-alert card gradient-45deg-cyan-light-green">
                    <div class="card-content white-text">
                        <p><i class="material-icons">check</i>
                            Vos modifications on été faites avec succès</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php } unset($_SESSION['modifok']); // je détruit aussitot la variable modif ok avec unset ?>
<!--/ profile-page-header -->
<div class="container-fluid">
    <div class="row">
        <div id="menuTab" class="col s10 offset-s1 z-depth-4">
            <ul class="tabs center-align">
                <li class="tab col s6"><a href="#profilecard" class="active">Mon Profil</a></li>
                <li class="tab col s6"><a href="#postProfile">Mes Sorties</a></li>
            </ul>
            <div class="col s12 l8 offset-l2">
                <div id="profilecard" class="card z-depth-3">
                    <div class="card-content white-text">
                        <span class="card-title center-align">Profil</span>
                        <div class="row infosprofil1">
                            <div class="col s4">
                                <img src="../images/iconprofil.svg" alt="profile image" class="circle z-depth-3">
                            </div>
                            <div class="col s7 offset-l1">
                                <div class="row">
                                    <p class="fontInfouser">Nom :  <?= $_SESSION['userInfos']->user_lastname; ?></p>
                                </div>
                                <div class="row">
                                    <p class="fontInfouser">Prénom :  <?= $_SESSION['userInfos']->user_firstname; ?></p>
                                </div>
                                <div class="row">
                                    <p class="fontInfouser">Pseudo :  <?= $_SESSION['userInfos']->user_pseudo ?></p>
                                </div>
                                <div class="row">
                                    <p class="fontInfouser">Vous êtes :  <?= $_SESSION['userInfos']->userType_type; ?></p>
                                </div>
                                <div class="row">
                                    <p class="fontInfouser">Mail :  <?= $_SESSION['userInfos']->user_mail; ?></p>
                                </div>
                                <div class="row">
                                    <p class="fontInfouser">Raison de l'inscription :  <?= $_SESSION['userInfos']->user_reasons; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action center-align">
                        <form action="" method="POST">
                            <a href="index.php?page=modifuser">Modifier</a>
                            <button class="waves-effect waves-light btn yellow darken-3 center-align modal-trigger"  href="#modaldelete">Supprimer</button>  <!-- Modal Structure -->
                            <!-- Modal-->
                            <div id="modaldelete" class="modal center-align">
                                <div class="modal-content">
                                    <h4>Suppression du compte</h4>
                                    <p>La supression de votre compte sera definitive et sans retour possible</p>
                                </div>
                                <div id="modalfooter" class="center-align">
                                    <button href="#!" class="modal-close waves-effect waves-green btn-flat red white-text center-align" name="submitDelete">Supprimer mon compte</button>
                                    <button href="#!" class="modal-close waves-effect waves-green btn-flat grey white-text center-align">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="postProfile" class="">
                <table class="highlight centered tablePosts">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Date</th>
                            <th>Titre</th>
                            <th> </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>01/01/2019</td>
                            <td>Plage/Sortie à la plage</td>
                            <td>
                                <button class="btn-small waves-effect waves-light yellow darken-3" type="submit" name="action">Ouvrir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>01/01/2019</td>
                            <td>Plage/Sortie à la plage</td>
                            <td>
                                <button class="btn-small waves-effect waves-light yellow darken-3" type="submit" name="action">Ouvrir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>01/01/2019</td>
                            <td>Plage/Sortie à la plage</td>
                            <td>
                                <button class="btn-small waves-effect waves-light yellow darken-3" type="submit" name="action">Ouvrir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container-fluid buttonsPosts">
                    <div class="row">
                        <div class="col s6 center-align">
                            <a class="btn-large waves-effect waves-light gradient-45deg-amber-amber z-depth-3" href="index.php?page=outingForm">Créer une sortie !</a>
                        </div>
                        <div class="col s6 center-align">
                            <a class="btn-large waves-effect waves-light gradient-45deg-amber-amber z-depth-3" type="" name="">Catalogue de sorties</a>
                        </div>
                    </div>
                </div>
            </div>
          <!--fin div postProfile-->
        </div>
    </div>
</div>
</div>