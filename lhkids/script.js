//fonction js pour la navbar en responsive (activation du menuburger)
$(document).ready(function(){
  $('.sidenav').sidenav();
// fonction pour le style des input du formulaire
   M.updateTextFields();
   //js pour input select du formulaire
   $('select').formSelect();
   // js pour textarea formulaire
   $('#textarea1').val(' ');
   M.textareaAutoResize($('#textarea1'));

 });
