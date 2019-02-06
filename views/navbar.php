<!-- navbar   -->
    <nav id="navbar">
      <div class="">
        <a href="index.php?page=home" class="brand-logo"><img class="logoNav" src="../images/logo.png" /></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php?page=inscription">Je m'inscris !</a></li>
          <?php if(!isset($_SESSION['userInfos'])){ ?>
          <li><a href="index.php?page=connexion">Connexion</a></li>
          <?php } ?>
          <?php if (isset($_SESSION['userInfos'])) { ?>
          <li><a href="index.php?page=deconnexion">Deconnexion</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php?page=inscription">Je m'inscris !</a></li>
      <li><a href="index.php?page=connexion">Connexion</a></li>
      <li><a href="index.php?page=deconnexion">Deconnexion</a></li>
    </ul>
<!-- fin navbar       -->
