<?php

namespace Services\Repository;

use \Services\Serialization\SerializerInterface;

class JsonRepository implements RepositoryInterface {

	protected $data;

	public function __construct($jsonFile, SerializerInterface $jsonSerializer) {
		$this->data = $jsonSerializer->deserializeCollection(file_get_contents($jsonFile), \Models\Student::class);
	}

	public function getAll() {
		return $this->data;
	}

	public function get($id) {
		foreach ($this->data as $item) {
			if ($item->id === $id) {
				return $item;
			}
		}

		return null;
	}
}