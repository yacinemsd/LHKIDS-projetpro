<!-- profile-page-header -->
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
  </div>

<!--/ profile-page-header -->
<div class="container-fluid">
<div class="row">
  <div id="menuTab" class="col s10 offset-s1 z-depth-4">
    <ul class="tabs">
      <li class="tab col s4"><a href="#profilecard" class="active">Mon Profil</a></li>
      <li class="tab col s4"><a href="#postProfile">Mes posts</a></li>
      <li class="tab col s4"><a href="#creationSortie">Créer une sortie</a></li>
    </ul>
  <div class="col s12 l8 offset-l2">
    <div id="profilecard" class="card z-depth-3">
              <div class="card-content white-text">
                <span class="card-title center-align">Profil</span>
                   <div class="row">
                     <div class="col s4">
                       <img src="../images/iconprofil.svg" alt="profile image" class="circle z-depth-3">
                     </div>
                     <div class="col s8">
                       <div class="">
                        <p><?= $_SESSION['userInfos']->user_lastname; ?></p>
                       </div>
                       <div class="">
                        <p><?= $_SESSION['userInfos']->user_firstname; ?></p>
                       </div>
                       <div class="">
                        <p><?= $_SESSION['userInfos']->user_pseudo ?></p>
                       </div>
                       <div class="">
                        <p><?= $_SESSION['userInfos']->userType_type; ?></p>
                       </div>
                       <div class="">
                        <p><?= $_SESSION['userInfos']->user_mail; ?></p>
                       </div>
                     </div>
                   </div>
                </div>
                <div class="card-action center-align">
                  <a href="modifUser.php">Modifier</a>
                  <a href="#">Supprimer</a>
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
    <button class="btn-large waves-effect waves-light yellow darken-3 z-depth-3" type="" name="action" href="">Créer une sortie !</button>
  </div>
  <div class="col s6 center-align">
    <button class="btn-large waves-effect waves-light yellow darken-3 z-depth-3" type="" name="action">Catalogue de sorties</button>
  </div>
</div>
</div>
</div> <!--fin div postProfile-->

<!-- creation sortie --><!-- creation sortie --><!-- creation sortie --><!-- creation sortie -->
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
<form id="UpdateStatus" class="tab-content col s12  grey lighten-4" enctype="multipart/form-data">
  <div class="row contenuformcreate">
    <div class="row">
    <div class="col s2">
      <img src="../images/iconprofil.svg" alt="profile image" class="circle z-depth-3">
    </div>
    <div class="input-field col s10">
        <input type="text" class="validate" id="" name="title" tabindex="1" value="">
        <label for="title">Titre de votre publication</label>
    </div>
   </div>
   <div class="row">
     <div class="input-field col s12 m5 l5">
         <input type="text" class="validate" id="" name="place" tabindex="1" value="">
         <label for="lieu">Lieu de la sortie</label>
     </div>
     <div class="input-field col s4 m4 l3">
         <input type="text" class="validate datepicker" id="" name="date" tabindex="2" value="">
         <label for="date">Date la sortie</label>
     </div>
     <div class="input-field col s4 m4 l2">
         <input type="text" class="validate timepicker" id="" name="timestart" tabindex="1" value="">
         <label for="timeDebut">Heure de début</label>
     </div>
     <div class="input-field col s4 m4 l2">
         <input type="text" class="validate timepicker" id="" name="timeend" tabindex="2" value="">
         <label for="timeFin">Heure de fin</label>
     </div>
   </div>
   <div class="row">
     <div class="col s6 m3 l3">
       <label>Genre de la sortie : </label>
       <select name="type">
          <option value="" disabled selected></option>
          <option value="">Sport</option>
          <option value="">Culturelle</option>
          <option value="">Ludique</option>
          <option value="">Artistique</option>
          <option value="">Autres</option>
        </select>
     </div>
     <div class="col s6 m3 l3">
      <label>Environnement : </label>
      <select name="environment">
         <option value="" disabled selected></option>
         <option value="">Intérieur</option>
         <option value="">Extérieur</option>
         <option value="">Intérieur et Extérieur</option>
       </select>
     </div>
     <div class="col s6 m3 l3">
      <label>Tranche d'âge : </label>
      <select name="age">
         <option value="" disabled selected></option>
         <option value="">Tout âge</option>
         <option value="">1ans et plus</option>
         <option value="">3ans et plus</option>
         <option value="">6ans et plus</option>
         <option value="">10ans et plus</option>
       </select>
     </div>
     <div class="col s6 m3 l3">
      <label>Prix : </label>
      <select name="price">
         <option value="" disabled selected></option>
         <option value="">Gratuit</option>
         <option value="">Payant</option>
         <option value="">Autres(Détails dans la dercription)</option>
       </select>
     </div>
   </div>
   <div class="row">
    <div class="input-field col s12">
        <textarea id="textarea" name="description" class="materialize-textarea"></textarea>
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
            <input class="file-path validate" type="text" placeholder="Ajouter une ou plusieurs images de votre sortie">
          </div>
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
        <a href="#">
          <i class="material-icons grey-text text-darken-1">location_on</i>
    </div>
    <div class="col s12 m6 right-align">
      <!-- Dropdown Trigger -->
      <a class="waves-effect waves-light btn orange accent-3">
        <i class="material-icons left">rate_review</i> Publier !</a>
    </div>
  </div>
</div>
<!-- CreateAlbum -->

</form>
</div>
      </div>
  </div>
  </div>
</div>
</div>
</div>
