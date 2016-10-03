<?php

namespace Config;

class AppRoutesProvider {

	public function register($app) {

		// Web
		$app->get('/', '\Controllers\Web\HomeController:default')->setName('home');
		$app->get('/students', '\Controllers\Web\StudentsController:list')->setName('students');

		// API
		$app->get('/api', '\Controllers\API\StudentsController:list');

	}

}