<?php

/**
 * Catalyst Coaching
 *
 * @author: CodeArtsOnline
 * @date: 15.06.2016 16:05
 */


// Load and initialise autolaoder
$app_path = dirname(__FILE__).DIRECTORY_SEPARATOR."App".DIRECTORY_SEPARATOR;
include($app_path."Autoloader.php");

\App\Autoloader::start();

// Get Core instance
$core = \App\CCoaching::getInstance();

$config = array(
	'developer_mode'    =>  false,
	'base_dir'          =>  dirname(__FILE__)
);

// Run the app
$core->run($config);

