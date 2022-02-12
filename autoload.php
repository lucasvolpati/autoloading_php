<?php

/**
 * Function for autoloading classes
 * Created by Lucas Alcantara Rodriguer Volpati | lucas.volpati@outlook.com
 * License: MIT
 * Make good use ;)
 */

spl_autoload_register(function($className) {

	$separator = DIRECTORY_SEPARATOR; 

	$dirBase = __DIR__ . $separator; 

	$class = $dirBase . 'class' . $separator . str_replace('\\', $separator, $className . ".php");
	
	if (file_exists($class)) {
		include($class);
	}
});
