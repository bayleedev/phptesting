<?php

namespace tests\television;

use television\Television;
use PHPUnit_Framework_TestCase;

class TelevisionTest extends PHPUnit_Framework_TestCase {

	public function setup() {
		$this->television = new Television();
		$this->assertEquals(0, $this->television->volume);
	}

	public function testVolumeUp() {
		$this->television->volume('up');
		$this->assertEquals(1, $this->television->volume);
	}

	public function testMaxVolumeUp() {
		$this->television->maxVolume = 10;
		$this->television->volume(10);
		$this->television->volume('up');
		$this->assertEquals(10, $this->television->volume);
	}

	public function testVolumeDown() {
		$this->television->volume('down');
		$this->assertEquals(9, $this->television->volume);
	}

	public function testMinimumVolumeDown() {
		$this->television->maxVolume = 0;
		$this->television->volume(0);
		$this->television->volume('down');
		$this->assertEquals(0, $this->television->volume);
	}

	public function testChannelUp() {
	}

	public function testMaxChannelUp() {
		$this->television->channels = [1,3,5,9];
		$this->television->channelIndex = 3;
		$this->television->channel('up');
		$this->assertEquals(0, $this->television->channelIndex);
	}

	public function testChannelDown() {
		$this->television->channels = [1,3,5,9];
		$this->television->channelIndex = 1;
		$this->television->channel('down');
		$this->assertEquals(0, $this->television->channelIndex);
	}

	public function testMinChannelDown() {
	}

}