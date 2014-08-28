<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:01
 */

namespace DesignPatterns\Structural\Facade;

interface BatteryInterface
{
	public function getBatteryLevel();
	public function getEnergy();
}