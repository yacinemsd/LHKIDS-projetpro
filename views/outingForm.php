<!-- creation sortie --><!-- creation sortie --><!-- creation sortie --><!-- creation sortie -->
<div><h1 class="center-align" id="formTitle">Créer une sortie</h1></div>
<div id="creationSortie" class="container-fluid ">
    <div class="row">
        <!-- profile-page-sidebar-->
        <!-- profile-page-wall -->
        <div id="formcreateSortie" class="col s12 l10 offset-l1">
            <!-- profile-page-wall-share -->
            <div id="" class="row">
                <div class="col s12">
                    <ul class="tabs tab-profile z-depth-1 orange lighten-1">
                        <li class="tab col s3">
                            <a class="white-text waves-effect waves-light active" href="#UpdateStatus">
                                <i class="material-icons">border_color</i>Formulaire</a>
                        </li>
                    </ul>
                    <!-- UpdateStatus-->
                    <form id="UpdateStatus" class="tab-content col s12  grey lighten-4 z-depth-3" enctype="multipart/form-data" action="" method="POST" role="form">
                        <div class="row contenuformcreate">
                            <div class="row">
                                <div class="col s2">
                                    <img src="../images/user_image/<?= $_SESSION['userInfos']->user_image != "" ? $_SESSION['userInfos']->user_image : 'iconprofil.svg'; ?>" alt="profile image" class="circle z-depth-3 imgprofil">
                                </div>
                                <div class="input-field col s10">
                                    <input type="text" class="validate" id="" name="title" tabindex="1" value="<?= isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '' ?>">
                                    <label for="title">Titre de votre publication</label>                    <!--Si $POST['title'] existe je le raffiche en html spécialchars pour sécuriser-->                                  
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['title'])) {
                                                echo $formError['title'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m5 l5">
                                    <input type="text" class="validate" id="" name="place" tabindex="1" value="<?= isset($_POST['place']) ? htmlspecialchars($_POST['place']) : '' ?>">
                                    <label for="lieu">Lieu de la sortie</label> <!--Si $POST['place'] existe je le raffiche en html spécialchars pour sécuriser-->
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['place'])) {
                                                echo $formError['place'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="input-field col s4 m4 l3">
                                    <input type="text" class="validate datepicker" id="" name="date" tabindex="2" value="<?= isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '' ?>">
                                    <label for="date">Date la sortie</label>                                             <!--Si $POST['place'] existe je le raffiche en html spécialchars pour sécuriser-->
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['date'])) {
                                                echo $formError['date'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="input-field col s4 m4 l2">
                                    <input type="text" class="validate timepicker" id="" name="timestart" tabindex="1" value="<?= isset($_POST['timestart']) ? htmlspecialchars($_POST['timestart']) : '' ?>">
                                    <label for="timeDebut">Heure de début</label>
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['timestart'])) {
                                                echo $formError['timestart'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="input-field col s4 m4 l2">
                                    <input type="text" class="validate timepicker" id="" name="timeend" tabindex="2" value="<?= isset($_POST['timeend']) ? htmlspecialchars($_POST['timeend']) : '' ?>">
                                    <label for="timeFin">Heure de fin</label>
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['timeend'])) {
                                                echo $formError['timeend'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 m3 l3">
                                    <label>Genre de la sortie : </label>
                                    <select name="selectType">
                                        <option value="" disabled></option>
                                        <?php foreach ($getOutingTypes as $outingType) { ?>
                                            <option value="<?= $outingType->outingType_id ?>" <?= isset($_POST['selectType']) && $outingType->outingType_id == $_POST['selectType'] ? 'selected' : '' ?>><?= $outingType->outingType_type ?></option>
                                        <?php } ?>                                                 <!-- affichage de la valeur récupérer en selected-->
                                    </select>
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['selectType'])) {
                                                echo $formError['selectType'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="col s6 m3 l3">
                                    <label>Environnement : </label>
                                    <select name="selectEnvironment">
                                        <option value="" disabled selected></option>
                                        <?php foreach ($getOutingEnvironment as $outingEnvironment) { ?>
                                            <option value="<?= $outingEnvironment->outingEnvironment_id ?>"<?= isset($_POST['selectEnvironment']) && $outingEnvironment->outingEnvironment_id == $_POST['selectEnvironment'] ? 'selected' : '' ?>><?= $outingEnvironment->outingEnvironment_environment ?></option>
                                        <?php } ?>                                                          <!-- affichage de la valeur récupérer en selected-->
                                    </select>
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['selectEnvironment'])) {
                                                echo $formError['selectEnvironment'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="col s6 m3 l3">
                                    <label>Tranche d'âge : </label>
                                    <select name="selectAge">
                                        <option value="" disabled selected></option>
                                        <?php foreach ($getOutingAge as $outingAge) { ?>
                                            <option value="<?= $outingAge->outingAge_id ?>" <?= isset($_POST['selectAge']) && $outingAge->outingAge_id == $_POST['selectAge'] ? 'selected' : '' ?>><?= $outingAge->outingAge_age ?></option>
                                        <?php } ?>                                               <!-- affichage de la valeur récupérer en selected-->
                                    </select>
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['selectAge'])) {
                                                echo $formError['selectAge'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                                <div class="col s6 m3 l3">
                                    <label>Prix : </label>
                                    <select name="selectPrice">
                                        <option value=""></option>
                                        <?php foreach ($getOutingPrice as $outingPrice) { ?>
                                            <option value="<?= $outingPrice->outingPrice_id ?>" <?= isset($_POST['selectPrice']) && $outingPrice->outingPrice_id == $_POST['selectPrice'] ? 'selected' : '' ?>><?= $outingPrice->outingPrice_price ?></option>
                                        <?php } ?>                                               <!-- affichage de la valeur récupérer en selected-->
                                    </select>         
                                    <div>
                                        <p class="inputError"><?php
                                            if (isset($formError['selectPrice'])) {
                                                echo $formError['selectPrice'];
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea" name="description" class="materialize-textarea"><?= isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '' ?></textarea>
                                    <label for="textarea" class="">Décrivez votre sortie !</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="file-field input-field">
                                        <div class="btn grey lighten-1">
                                            <span>Images</span>
                                            <input name="image" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"  value="" placeholder="Ajouter une ou plusieurs images de votre sortie">
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
                                <div class="col s12 m6 share-icons">
                                    <a href="#">
                                        <i class="material-icons grey-text text-darken-1">camera_alt</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons grey-text text-darken-1">account_circle</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons grey-text text-darken-1">keyboard</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons grey-text text-darken-1">location_on</i>
                                    </a>
                                </div>
                                <div class="col s12 m6 right-align">
                                    <!-- Dropdown Trigger -->
                                    <button class="waves-effect waves-light btn orange accent-3" type="submit" name="submitCreateOuting">
                                        <i class="material-icons left">rate_review</i> Publier !
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>