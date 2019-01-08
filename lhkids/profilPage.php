<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Profil</title>

    <link rel="stylesheet" href="style.css" />
    <!-- materialize -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <!-- fontawesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Galindo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- navbar profil-->
          <nav id="navbar2">
            <div class="">
              <a href="#" class="brand-logo"><img class="logoNav" src="images/logo.png" /></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Les sorties!</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="connexion.php">Déconnexion</a></li>
              </ul>
            </div>
          </nav>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Les sorties!</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="connexion.php">Déconnexion</a></li>
          </ul>
      </header>
      <!-- fin navbar profil -->
      <!-- profile-page-header -->
      <div class="container-fluid">
        <div class="row imgbackProfil center-align">
          <div class="col s3">
            <img src="images/iconprofil.svg" alt="profile image" class="circle z-depth-3 imgprofil">
            </div>
            <div class="col s3 center-align divTitleProfile">
                <div class="profiletitle">
                    <p>Yacine</p>
                </div>
                <div class="profiletitle2">
                     <p>Papa</p>
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
          </div>
        </div>

      <!--/ profile-page-header -->
      <div class="container-fluid">
      <div class="row">
        <div id="menuTab" class="col s8 offset-s2 z-depth-3">
          <ul class="tabs">
            <li class="tab col s4"><a href="#profile" class="active">Mon Profil</a></li>
            <li class="tab col s4"><a href="#postProfile">Mes posts</a></li>
            <li class="tab col s4"><a href="#postCom">Commentaires</a></li>
          </ul>
        <div class="col s8">
        <div id="profile" class="">
          <div class="row">
            <div class="col s4">
              <img src="" class="">
            </div>
            <div class="col s8">


            </div>
          </div>

        </div>
        <div id="postProfile" class="">Test 2</div>
        <div id="postCom" class="">Test 3</div>
        </div>
      </div>
    </div>
  </div>

<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

</body>
</html>
