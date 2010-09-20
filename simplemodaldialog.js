$(document).ready(function() {


$('#simplemodaldialog .close_button').click(function() {
  $('#simplemodaldialog').hide();
  $.get(Drupal.settings.basePath + 'simplemodaldialog/hide');
});

});