<?php

namespace Services\Repository;

interface RepositoryInterface {
	public function getAll();
	public function get($id);
}