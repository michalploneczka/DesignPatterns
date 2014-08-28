<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:53
 */

namespace DesignPatterns\Structural\DependencyInjection;

class HardDrive
{
	protected $configuration;
	protected $freeStorage;

	public function __construct(ParametersInterface $configuration)
	{
		$this->configuration = $configuration;
	}

	public function load()
	{
		$this->freeStorage = $this->configuration->get('free_storage');
	}

	public function getFreeStorage()
	{
		return $this->freeStorage;
	}
}