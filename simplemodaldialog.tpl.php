<?php
/**
 * The name of the container div has to be simplemodaldialog
 * You can use any element to contain the close button but it must be
 * inside simplemodaldialog and should have class close_button
 */
?>
<div id="simplemodaldialog">

  This is inside the modal dialog

  <div class="close_button">Close</div>
</div>

<?php
/**
 * DONOT MODIFY BELOW THIS LINE
 */
drupal_add_js(drupal_get_path('module', 'simplemodaldialog') . '/simplemodaldialog.js');
?>