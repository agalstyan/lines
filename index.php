<?php
require_once(__DIR__ . '/debug_functions.php');
require_once(__DIR__ . '/error_handlers.php');
require_once(__DIR__ . '/config/common.php');
require_once(__DIR__ . '/smarty.php');

$controller = new \App\Controller\Lines();
$controller->index();