<?php

namespace Controllers\Web;

class HomeController extends \Controllers\Web\WebController {

	public function __construct($container) {
		parent::__construct($container);
	}

	public function default($request, $response, $args) {
		$response = $this->view->render($response, 'home.html');
		return $response;
	}
}
