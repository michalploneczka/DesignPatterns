<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:01
 */

namespace DesignPatterns\Structural\Facade;

interface TimeInterface
{
	public function getHour();
	public function getMinutes();
	public function getSeconds();
	public function setHour();
	public function setMinutes();
	public function setSeconds();
}