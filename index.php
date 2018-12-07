
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>site</title>
    <!-- link bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- link fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <!-- fontawesome -->
     <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!---->
     <link rel="stylesheet" href="style.css" />
   </head>
    <body>
    <!-- début nav bar top -->
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-8 col-sm-4 navTop"><!-- sur grand écran ma colonne aura une largeur de 8 et de 4 sur petit écran-->
      <a class="navbar-brand" href="#">
        <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="LOGO">
      </a>
    </div>
    <div class="col-lg-2 col-sm-4 navTop"><!-- sur grand écran ma colonne aura une largeur de 2 et de 4 sur petit écran-->
      <a class="" href="#">
      <i class="fas fa-user-circle iconTop"> S'inscrire</i>
      </a>
    </div>
    <div class="col-lg-2 col-sm-4 navTop"><!-- sur grand écran ma colonne aura une largeur de 2 et de 4 sur petit écran-->
      <a class="" href="#">
      <i class="fas fa-sign-in-alt iconTop"> Se connecter</i>
      </a>
    </div>
  </div><!--fin row-->
</div><!--fin container-->
<!-- fin nav bar top  -->

<!-- code image d'acceuil + éléments superposés -->
<div id="accueil" class="container-fluid">
  <div class="row">

<img id="imgAccueil" src="images/pix1.png" alt="acceuil" />
<h1 id="textAccueil">Le Havre pour les enfants !</h1>
<h2 id="textAccueil2">Site d'échange et partage de bons plans pour vos sorties avec les enfants <i class="fas fa-smile-wink iconsmiley"></i></h2>
</div>

</div>
<!-- fin image acceuil  -->
<!-- menu navbar -->

<?php
  require_once 'navAccueil.php';
?>

<!-- fin menu navbar -->

<!-- footer -->
<?php
require_once 'footer.php';
 ?>
<!-- fin footer -->
<div class="">
<p>   <br> <br> <br> </p>
</div>
<!-- link js -->
<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </body>

</html>
