<?php

function autoload($class_name)
{
	$ordinary_classname = str_replace("_", DIRECTORY_SEPARATOR, $class_name);
	$ordinary_filename = LIBDIR . $ordinary_classname . ".php";
	if (!file_exists($ordinary_filename) || !include($ordinary_filename)) {
		$namespace_classname = str_replace('\\', DIRECTORY_SEPARATOR, $ordinary_classname);
		$namespace_filename = LIBDIR . $namespace_classname . ".php";
		if (!file_exists($namespace_filename) || !include($namespace_filename)) {
//			debug_print_backtrace();
		}
	}
}

spl_autoload_register('autoload');