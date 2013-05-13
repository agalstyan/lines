<?php

require_once(__DIR__ . '/constants.php');
require_once(__DIR__ . '/autoload.php');

$config = new \Core\Config();

\Core\Tools::set('config', $config);
