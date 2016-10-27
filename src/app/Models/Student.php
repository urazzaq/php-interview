<?php

namespace Models;

class Student {
	public $id;
	public $firstName;
	public $lastName;
	public $displayName;
	public $favoriteColor;
	public $favoriteFood;
	public $favoriteMovie;

	public function __construct($id = null, $firstName = null, $lastName = null) {
		$this->id = $id;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}
}
