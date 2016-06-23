<?php
/**
 * Copyright (c) 2016.
 *
 * @author: CodeArtsOnline
 * @project: Catalyst Coaching
 */

namespace App;

/**
 * Class Autoloader
 * @package App
 */
class Autoloader
{


	/**
	 * Registers the autoloader
	 */
	public static function start()
	{
		spl_autoload_extensions(".php");
		spl_autoload_register();
	}
}