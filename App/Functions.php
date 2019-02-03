<?php
function view($fileName){ //je crée  une fonction view dans laquelle je stock mes require correspondant à mes pages
  global $formError; // j'appel la variable formError avec un global pour préciser qu'elle n'est pas local ( qu'elle ne fait pas partie de la view)
  
  require 'views/templateHeader.php';
  require 'views/'.$fileName; // je concatène le chemin du fichier avec la variable $filename qui correspondra au nom de chaque fichier selon la page
  require 'views/templateFooter.php';
}
 ?>
