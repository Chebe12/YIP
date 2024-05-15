<?php
// Include Smarty template engine
require_once 'smarty/libs/Smarty.class.php';

// Initialize Smarty
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
