<?php

define('SMARTY_ROOT_DIR', SSROOT . 'smarty/');
define('SMARTY_DIR', SMARTY_ROOT_DIR . 'libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty();

$smarty->setCacheDir(SMARTY_ROOT_DIR . 'cache/');
$smarty->setCompileDir(SMARTY_ROOT_DIR . 'templates_c/');
$smarty->setConfigDir(SMARTY_ROOT_DIR . 'configs/');
$smarty->setTemplateDir(SSROOT . 'templates/');

\Core\Tools::set('smarty', $smarty);

