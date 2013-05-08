<?php

function d($var) {
	if ('cli' != php_sapi_name()) {
		echo "<pre>";
	}
	print_r((func_num_args() == 1) ? $var : func_get_args());
	if ('cli' != php_sapi_name()) {
		echo "</pre>";
	}
	echo PHP_EOL;
	return $var;
}

function dd() {
	call_user_func_array('d', func_get_args());
	die();
}