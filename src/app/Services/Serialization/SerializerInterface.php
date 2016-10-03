<?php

namespace Services\Serialization;

interface SerializerInterface {
	public function deserializeCollection($serializedInput, $type);
	public function deserializeObject($serializedInput, $type);
	public function serialize($obj);
}