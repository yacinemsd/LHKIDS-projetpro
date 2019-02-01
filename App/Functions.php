<?php
function view($fileName){ //je crée  une fonction view dans laquelle je stock mes require correspondant à mes pages
  require 'views/templateHeader.php';
  require 'views/'.$fileName; // je concatène le chemin du fichier avec la variable $filename qui correspondra au nom de chaque fichier selon la page
  require 'views/templateFooter.php';
}
 ?>
