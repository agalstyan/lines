<?php

function error_handler($errno, $errstr)
{
 	d($errstr);
}

set_error_handler('error_handler');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');