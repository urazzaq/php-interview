<?php

use \PHPUnit\Framework\TestCase;
use \Models\Student;
use \Services\NameResolver\StudentNameResolver;

class StudentNameResolverTest extends TestCase {

	public function testNoDuplicateFirstNames() {

		// Arrange
		$students = array(
			new Student(1, 'Carrie', 'Fisher'),
			new Student(2, 'Harrison', 'Ford'),
			new Student(3, 'Mark', 'Hamill'),
		);
		$resolver = new StudentNameResolver();

		// Act
		$resolver->resolve($students);
		$displayNames = array_map(function($student) {
			return $student->displayName;
		}, $students);

		// Assert
		$this->assertEquals(['Carrie', 'Harrison', 'Mark'], $displayNames);
	}

	public function testWithDuplicateFirstNames() {

		// Arrange
		$students = array(
			new Student(1, 'Carrie', 'Fisher'),
			new Student(2, 'Harrison', 'Ford'),
			new Student(3, 'Mark', 'Hamill'),
			new Student(4, 'Mark', 'Berg'),
			new Student(5, 'Carrie', 'Smith'),
		);
		$resolver = new StudentNameResolver();
		// Act
		$resolver->resolve($students);
		$displayNames = array_map(function($student) {
			return $student->displayName;
		}, $students);

		// Assert
		$this->assertEquals(['Carrie F', 'Harrison', 'Mark H', 'Mark B', 'Carrie S'], $displayNames);
	}

}
