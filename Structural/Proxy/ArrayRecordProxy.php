<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 28.08.2014
 * Time: 20:27
 */

namespace DesignPatterns\Structural\Proxy;

class ArrayRecordProxy extends ArrayRecord
{
	protected $isInitialized = false;

	public function __construct($data)
	{
		parent::__construct($data);

		if (null !== $data) {
			$this->isInitialized = true;
		}
	}

	public function __set($name, $value)
	{
		parent::__set($name, $value);
	}
}