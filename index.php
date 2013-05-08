<?php

require_once(__DIR__ . '/debug_functions.php');
require_once(__DIR__ . '/config/common.php');

$staring_point = new App\Figures\Point(30.0, 30.0);
$angle = 270;
$line_length = 30;

$line = new App\Figures\Line();
$line->setStartingPoint($staring_point)
	->setAngle($angle)
	->setLineLength($line_length)
	->draw();
