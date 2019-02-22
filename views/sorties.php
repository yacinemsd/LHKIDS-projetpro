<?php 
if(!isset($_SESSION['userInfos'])){
    $_SESSION['noConnexion'] = true;
    header('Location: index.php?page=connexion');
    exit();
}
?>
<div>
    <h1 class="center-align" id="formTitle">Les sorties LH KIDS</h1>
</div>
<?php foreach ($getOutingInfos as $outingInfos) { ?>
    <div class="container z-depth-4" id="cardsortie">
        <div class="row">
            <div class="col s12">
                <div class="row valign-wrapper topcardSortie">
                    <div class="col s1">
                        <img src="../images/user_image/<?= $outingInfos->user_image != "" ? $outingInfos->user_image : 'iconprofil.svg'; ?>" alt="profile image" class="circle z-depth-3 imgprofilInOuting">
                    </div>
                    <div class="col s10 valign-wrapper">
                        <p class="pseudocardOuting"><?= $outingInfos->user_pseudo ?></p>
                        <span class="blue-text ultra-small"> _ Publiée le : <?= $outingInfos->outing_postDateTime ?></span>
                    </div>
                    <div class="col s1 right-align">
                        <i class="material-icons">expand_more</i>
                    </div>
                </div>
                <div class="center-align">
                    <p class="titleOuting"><?= $outingInfos->outing_title ?></p>
                </div>
                <div class="row rowCarousel">
                    <div class="col s12 m6 l6">
                        <div class="carousel" id="carouselSortie">
                            <a class="carousel-item" href="#one!"><img class="circle z-depth-2" src="../images/user_image/<?= $outingInfos->image_path != "" ? $outingInfos->image_path : 'logo.png'; ?>"></a>
                            <a class="carousel-item" href="#two!"><img class="circle z-depth-2" src="../images/user_image/<?= $outingInfos->image_path != "" ? $outingInfos->image_path : 'logo.png'; ?>"></a>
                            <a class="carousel-item" href="#three!"><img class="circle z-depth-2" src="../images/user_image/<?= $outingInfos->image_path != "" ? $outingInfos->image_path : 'logo.png'; ?>"></a>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <div class="row">
                            <div class="col">
                                <p class="textOuting">Lieu : <?= $outingInfos->outing_place ?></p>
                            </div>
                            <div class="col">
                                <p class="textOuting">Date : <?= $outingInfos->outing_date ?></p>
                            </div>
                            <div class="col">
                                <p class="textOuting">Début : <?= $outingInfos->outing_startTime ?> / Fin : <?= $outingInfos->outing_endTime ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="textOuting">Genre : <?= $outingInfos->outingType_type ?></p>
                            </div>
                            <div class="col">
                                <p class="textOuting">Environement : <?= $outingInfos->outingEnvironment_environment ?></p>
                            </div>
                        </div>
                        <div class="row center-align">
                            <div class="col">
                                <p class="textOuting">Age : <?= $outingInfos->outingAge_age ?></p>
                            </div>
                            <div class="col">
                                <p class="textOuting">Prix : <?= $outingInfos->outingPrice_price ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s2 center-align">
                                <p class="textOuting">Description Sortie :</p>
                            </div>
                            <div class="valign-wrapper col s10">
                                <p class="textOuting"><?= $outingInfos->outing_description ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row valign-wrapper">
                <div class="col s3 card-action-share center-align">
                    <a href="#">
                        <i class="material-icons grey-text text-darken-1">thumb_up</i>
                    </a>
                    <a href="#">
                        <i class="material-icons grey-text text-darken-1">share</i>
                    </a>
                </div>
                <div class="input-field col s8 center-align">
                    <input id="profile-comments" type="text" class="validate">
                    <label for="profile-comments" class="">Commentaire</label>
                </div>
                <div class="col s1">
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
