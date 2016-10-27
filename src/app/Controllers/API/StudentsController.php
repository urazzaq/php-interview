<?php

namespace Controllers\API;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class StudentsController extends \Controllers\BaseController {

	protected $studentRepository;
	protected $studentNameResolver;

	public function __construct($container) {
		parent::__construct($container);
		$this->studentRepository = $this->container['student_repository'];
		$this->studentNameResolver = $this->container['student_name_resolver'];
	}

	public function list(Request $request, Response $response, $args) {
		$students = $this->studentRepository->getAll();

		// TODO: Resolve display names here
		$this->studentNameResolver->resolve($students);
		return $response->withJson($students);
	}


}
