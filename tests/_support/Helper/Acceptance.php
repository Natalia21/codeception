<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
	function customFindElements() {
		$els = $this->getModule('WebDriver')->mouseMove('h3');
		return $els[0];
	}

}
