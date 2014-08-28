<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:49
 */

namespace DesignPatterns\Structural\DependencyInjection;

class Configuration extends AbstractConfiguration implements ParametersInterface
{
	public function get($key, $default = null)
	{
		if (isset($this->storage[$key])) {
			return $this->storage[$key];
		}
		return $default;
	}

	public function set($key, $value)
	{
		$this->storage[$key] = $value;
	}
}