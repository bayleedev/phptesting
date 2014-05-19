<?php

namespace television\concerns;

use InvalidArgumentException;

trait Volume {

	public $volume = 0;

	public $maxVolume = 10;

	public $minVolume = 0;

	public function volume($degree) {
		if ($degree == 'up') {
			if ($this->volume < $this->maxVolume) {
				return $this->volume++;
			}
			return;
		} elseif ($degree == 'down') {
			if ($this->volume > $this->minVolume) {
				return $this->volume--;
			}
			return;
		} elseif (in_array($degree, range($this->minVolume, $this->maxVolume), true)) {
			return $this->volume = $degree;
		}
		throw new InvalidArgumentException("Value '{$degree}' is not an acceptable volume.");
	}

}