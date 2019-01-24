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
   // js menu tab
    $('.tabs').tabs();
    //js carroussel
     $('.carousel').carousel();

   //js datepicker et timepicker
   $('select').formSelect();
// Mise en place du datepicker en français
$('.datepicker').datepicker({
    i18n: {
        selectMonths: true,
        selectYears: 2,
        firstDay: 1,
        months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthsShort: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        weekdays: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
        weekdaysShort: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
        weekdaysAbbrev: ['L', 'M', 'M', 'J', 'V', 'S', 'D'],
        today: 'Aujourd\'hui',
        clear: 'Réinitialiser',
        cancel: 'Fermer'
    },
    format: 'yyyy-mm-dd'
});
// Mis en place du timepicker
$('.timepicker').timepicker({
    defaultTime: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromNow: 0, // set default time to * milliseconds from now (using with default = 'now')
    twelveHour: false, // don't AM/PM or 24-hour format
    done: 'OK', // text for done-button
    clear: 'Effacer', // text for clear-button
    cancel: 'Annuler', // Text for cancel-button,
    container: undefined, // ex. 'body' will append picker to body
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function () {} //Function for after opening timepicker
});
 });
