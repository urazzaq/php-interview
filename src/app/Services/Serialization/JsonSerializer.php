<?php

namespace Services\Serialization;

class JsonSerializer implements \Services\Serialization\SerializerInterface {

	public function deserializeCollection($serializedInput, $type) {
		$deserializedJson = json_decode($serializedInput, true);
		
		$returnCollection = array();
		foreach ($deserializedJson as $obj) {
			$returnCollection[] = $this->deserializeObject($obj, $type);
		}

		return $returnCollection;
	}

	public function deserializeObject($serializedInput, $type) {
		$deserializedJson;
		if (is_string($serializedInput)) {
			$deserializedJson = json_decode($serializedInput, true);
		} else {
			$deserializedJson = $serializedInput;
		}

		$returnObj = new $type();
		foreach($deserializedJson as $prop => $value) {
			if (property_exists($returnObj, $prop)) {
				$returnObj->{$prop} = $value;
			}
		}

		return $returnObj;
	}

	public function serialize($obj) {
		return json_encode($obj);
	}
}