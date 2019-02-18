<div>
  <h1 class="center-align" id="formTitle">Les sorties LH KIDS</h1>
</div>
<div class="container z-depth-4" id="cardsortie">
<div class="row">
  <div class="col s12">
      <div class="row valign-wrapper topcardSortie">
        <div class="col s1">
          <img src="../images/iconprofil.svg" alt="profile image" class="circle z-depth-3">
        </div>
        <div class="col s10 valign-wrapper">
          <p class="grey-text text-darken-4 margin">Pseudo </p>
          <span class="grey-text text-darken-1 ultra-small"> _ Date de la publication - 01/01/2019</span>
        </div>
        <div class="col s1 right-align">
          <i class="material-icons">expand_more</i>
        </div>
      </div>
      <div class="center-align">
          <?php foreach($getOutingInfos as $outingInfos){ ?>
        <p><?= $outingInfos->outing_title ?></p>
          <?php } ?>
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
              <p>Lieu : Forêt</p>
            </div>
            <div class="col">
              <p>Date : 29/01/2019</p>
            </div>
            <div class="col">
              <p>Début : 14H00 / Fin : 16H00</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <p>Genre : Sport</p>
            </div>
            <div class="col">
              <p>Environnement : Extérieur</p>
            </div>
          </div>
          <div class="row center-align">
            <div class="col">
            <p>Tranche d'âge : 3-10ans</p>
            </div>
            <div class="col">
              <p>Prix : Gratuit</p>
            </div>
          </div>
        </div>
      <div class="row">
      <div class="col s12">
      <div class="col s2 center-align">
      <p class="black-text text-darken-4 margin">Description Sortie :</p>
    </div>
    <div class="valign-wrapper col s10">
      <p class="grey-text text-darken-4 margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus massa sed imperdiet finibus. In dictum volutpat leo, sed elementum mi accumsan et. Proin ut ante semper, ultricies erat vel, imperdiet leo. Vestibulum purus quam, pellentesque non libero id, faucibus viverra est. Praesent magna nisi, pellentesque quis maximus quis, volutpat at risus. Aliquam sit amet arcu auctor, sodales enim vel, facilisis orci.</p>
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
