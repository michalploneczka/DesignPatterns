<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:39
 */

namespace DesignPatterns\Structural\Registry;

abstract class Registry
{
	protected static $values = array();

	public static function set($key, $value)
	{
		self::$values[$key] = $value;
	}

	public static function get($key)
	{
		return self::$values[$key];
	}
}