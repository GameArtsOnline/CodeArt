<?php
/**
 * Copyright (c) 2016.
 *
 * @author: CodeArtsOnline
 * @project: Catalyst Coaching
 */

namespace App;

use App\Lib\Traits;

/**
 * Class CCoaching
 * @package App
 */
class CCoaching
{
	use Traits\Singleton;


	/**
	 * Stores all registry information
	 *
	 * @var array
	 */
	protected static $_registry = array();

	/**
	 * @var array
	 */
	protected $_version = array(1, 0, 0, 1);

	/**
	 * The main function executing the cms
	 *
	 * @param array $config
	 * @return CCoaching
	 */
	public function run(array $config):CCoaching
	{
		self::register('core/config', $config);
		//$this->doDefines();
		return $this;
	}

	/**
	 * Register new registry entry
	 *
	 * @param string $name
	 * @param $config
	 */
	public static function register(string $name, $config)
	{
		self::$_registry[$name] = $config;
	}

	/**
	 * Get registry entry
	 *
	 * @param string $name
	 * @return mixed|null
	 */
	public static function registry(string $name)
	{
		if(isset(self::$_registry[$name]))
		{
			return self::$_registry[$name];
		}
		return null;
	}

	/**
	 * @param bool $as_string
	 * @return array|string
	 */
	public function getVersion(bool $as_string = true)
	{
		if($as_string)
		{
			return sprintf("%d.%d.%d.%d", $this->_version[0], $this->_version[1], $this->_version[2], $this->_version[3]);
		}
		else
		{
			return $this->_version;
		}
	}
}