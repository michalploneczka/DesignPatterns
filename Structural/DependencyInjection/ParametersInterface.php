<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:45
 */

namespace DesignPatterns\Structural\DependencyInjection;

interface ParametersInterface
{
	public function get($key);
	public function set($key, $value);
}