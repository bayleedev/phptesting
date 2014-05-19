<?php

namespace television;

class Television {

	use concerns\Volume;
	use concerns\Channel;

	public function __construct(array $config = []) {
		foreach ($config as $key => $value) {
			$this->$key = $value;
		}
	}

}