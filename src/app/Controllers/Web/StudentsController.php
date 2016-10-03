<?php

namespace Controllers\Web;

use \Services\Repository\RepositoryInterface;

class StudentsController extends \Controllers\Web\WebController {

	protected $studentRepository;

	public function __construct($container) {
		parent::__construct($container);
		$this->studentRepository = $this->container['student_repository'];
	}

	public function list($request, $response, $args) {
		$students = $this->studentRepository->getAll();

		// TODO: Resolve display names here

		$response = $this->view->render($response, 'students.html', ['students' => $students]);
		return $response;
	}
}
