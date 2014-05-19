<?php

namespace television\concerns;

use InvalidArgumentException;

trait Channel {

	public $channelIndex = 0;

	public $channels = [1,3,5,9];

	public function nextChannel() {
		if (($this->channelIndex + 1) > count($this->channels) - 1) {
			return 0;
		}
		return $this->channelIndex + 1;
	}

	public function prevChannel() {
		if (($this->channelIndex - 1) == -1) {
			return count($this->channels) - 1;
		}
		return $this->channelIndex - 1;
	}

	public function channel($degree) {
		if ($degree == 'up') {
			return $this->channelIndex = $this->nextChannel();
		} elseif ($degree == 'down') {
			return $this->channelIndex = $this->prevChannel();
		} elseif ($key = array_search($degree, $this->channels)) {
			return $this->channelIndex = (int) $degree;
		}
		throw new InvalidArgumentException("Value '{$degree}' is not an acceptable channel.");
	}

}