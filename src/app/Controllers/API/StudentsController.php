<?php

namespace Controllers\API;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class StudentsController extends \Controllers\BaseController {

	protected $studentRepository;

	public function __construct($container) {
		parent::__construct($container);
		$this->studentRepository = $container['student_repository'];
	}

	public function list(Request $request, Response $response, $args) {
		$students = $this->studentRepository->getAll();

		// TODO: Resolve display names here

		return $response->withJson($students);
	}


}
