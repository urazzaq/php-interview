<?php

namespace Controllers;

abstract class BaseController {
	protected $container;

	public function __construct($container) {
		$this->container = $container;
	}
}
