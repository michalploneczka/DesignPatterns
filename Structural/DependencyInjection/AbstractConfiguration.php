<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:48
 */

namespace DesignPatterns\Structural\DependencyInjection;


abstract class AbstractConfiguration
{
	protected $storage;

	public function __construct($storage)
	{
		$this->storage = $storage;
	}
}