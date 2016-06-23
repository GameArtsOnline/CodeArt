<?php
/**
 * Copyright (c) 2016.
 *
 * @author: CodeArtsOnline
 * @project: Catalyst Coaching
 */



namespace App\Lib\Traits;

/**
 * Class Singleton
 * @package App\Lib\Traits
 */
trait Singleton
{

	/**
	 * @var Singleton
	 */
	protected static $_instance = null;

	/**
	 * Prevent direct construction
	 */
	final private function __construct()
	{
		$this->_init();
	}

	/**
	 * Get and initialise the instance if necessary
	 * 
	 * @return self
	 */
	final public static function getInstance():self
	{
		if(is_null(static::$_instance))
		{
			static::$_instance = new static();
		}

		return static::$_instance;
	}

	/**
	 * Overrideable initialise function replacing __construct
	 */
	protected function _init()
	{

	}
}