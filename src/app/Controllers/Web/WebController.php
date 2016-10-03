<?php

namespace Controllers\Web;

abstract class WebController extends \Controllers\BaseController {

	protected $view;

	public function __construct($container) {
		parent::__construct($container);
		$this->view = $this->container['view'];
	}
}
