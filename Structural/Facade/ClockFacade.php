<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 19:51
 */

namespace DesignPatterns\Structural\Facade;

class ClockFacade
{
	/**
	 * @var BatteryInterface
	 */
	protected $battery;

	/**
	 * @var TimeInterface
	 */
	protected $time;

	public function __constructor(BatteryInterface $battery, TimeInterface $time) {
		$this->battery = $battery;
		$this->time = $time;
	}

	public function getActualTime() {
		return $this->time->getHour() . ':' . $this->time->getMinutes() . ':' . $this->time->getSeconds();
	}

	public function setActualTime($hour, $minutes, $seconds) {
		$this->time->setHour($hour);
		$this->time->setMinutes($minutes);
		$this->time->setSeconds($seconds);
	}

	public function supply() {
		if ($this->battery->getBatteryLevel()>0) {
			$this->battery->getEnergy();
		} else {
			throw new \Exception("Energy fault!");
		}
	}
}