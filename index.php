<?php

require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/Information.php';

$bcra_method = Information::fetch_data(API_URL, TOKEN);
$dolar_data = $bcra_method->get_data(); 

?>

<?php render_template('head'); ?>
<?php render_template('body', array_merge($dolar_data)); ?>
<?php render_template('styles'); ?>
