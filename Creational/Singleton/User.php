<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:59
 */

class User
{
	private static $instance;

	public static function getInstance()
	{
		if (null === static::$instance) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	private function __construct()
	{

	}

	private function __clone()
	{

	}

	private function __wakeup()
	{

	}
}