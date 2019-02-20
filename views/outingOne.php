<div>
    <h1 class="center-align" id="formTitle"><?= $getOutingOne->outing_title ?></h1>
</div>
    <div class="container z-depth-4" id="cardsortie">
        <div class="row">
            <div class="col s12">
                <div class="row valign-wrapper topcardSortie">
                    <div class="col s1">
                        <img src="" alt="profile image" class="circle z-depth-3 imgprofil">
                    </div>
                    <div class="col s10 valign-wrapper">
                        <p class="grey-text text-darken-4 margin"><?= $getOutingOne->user_pseudo ?></p>
                        <span class="grey-text text-darken-1 ultra-small"> _ Publiée le : <?= $getOutingOne->outing_postDateTime ?></span>
                    </div>
                    <div class="col s1 right-align">
                        <i class="material-icons">expand_more</i>
                    </div>
                </div>
                <div class="center-align">
                    <p><?= $getOutingOne->outing_title ?></p>
                </div>
                <div class="row rowCarousel">
                    <div class="col s12 m6 l6">
                        <div class="carousel" id="carouselSortie">
                            <a class="carousel-item" href="#one!"><img class="circle z-depth-2" src="../images/pix1.jpeg"></a>
                            <a class="carousel-item" href="#two!"><img class="circle z-depth-2" src="../images/pix2.jpeg"></a>
                            <a class="carousel-item" href="#three!"><img class="circle z-depth-2" src="../images/pix3.jpeg"></a>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 center-align">
                        <div class="row">
                            <div class="col">
                                <p>Lieu : <?= $getOutingOne->outing_place ?></p>
                            </div>
                            <div class="col">
                                <p>Date : <?= $getOutingOne->outing_date ?></p>
                            </div>
                            <div class="col">
                                <p>Début : <?= $getOutingOne->outing_startTime ?> / Fin : <?= $getOutingOne->outing_endTime ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Genre : <?= $getOutingOne->outingType_type ?></p>
                            </div>
                            <div class="col">
                                <p>Environement : <?= $getOutingOne->outingEnvironment_environment ?></p>
                            </div>
                        </div>
                        <div class="row center-align">
                            <div class="col">
                                <p>Age : <?= $getOutingOne->outingAge_age ?></p>
                            </div>
                            <div class="col">
                                <p>Prix : <?= $getOutingOne->outingPrice_price ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="col s2 center-align">
                                <p class="black-text text-darken-4 margin">Description Sortie :</p>
                            </div>
                            <div class="valign-wrapper col s10">
                                <p><?= $getOutingOne->outing_description ?></p>
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
