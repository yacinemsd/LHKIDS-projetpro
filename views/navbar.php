<!-- navbar   -->
<nav id="navbar">
    <div class="">
        <a href="index.php?page=home" class="brand-logo"><img class="logoNav" src="../images/logo.png" /></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php if (isset($_SESSION['userInfos'])) { ?>
                <?php if ($_GET['page'] !== 'profil') { ?>
                    <li><a href="index.php?page=profil">Mon Profil</a></li>
                <?php } ?>
                <?php if ($_GET['page'] !== 'sorties') { ?>
                    <li><a href="index.php?page=sorties">Les sorties</a></li>
                <?php } ?>
                <?php if ($_GET['page'] !== 'outingForm') { ?>
                    <li><a href="index.php?page=outingForm">Créer une sortie</a></li>
                <?php } ?>
            <?php } ?>
            <?php if (!isset($_SESSION['userInfos'])) { ?>
                <li><a href="index.php?page=inscription">Je m'inscris !</a></li>
                <li><a href="index.php?page=connexion">Connexion</a></li>
            <?php } ?>
            <?php if (isset($_SESSION['userInfos'])) { ?>
                <li><a href="index.php?page=deconnexion">Deconnexion</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>
<ul class="sidenav" id="mobile-demo">
    <?php if (!isset($_SESSION['userInfos'])) { ?>
        <li><a href="index.php?page=inscription">Je m'inscris !</a></li>
        <li><a href="index.php?page=connexion">Connexion</a></li>
    <?php } ?>
    <?php if (isset($_SESSION['userInfos'])) { ?>
        <li><a href="index.php?page=profil">Mon profil</a></li>
        <li><a href="index.php?page=sorties">Les sorties</a></li>
        <li><a href="index.php?page=deconnexion">Deconnexion</a></li>
    <?php } ?>
</ul>
<!-- fin navbar       -->
