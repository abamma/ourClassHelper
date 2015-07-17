<?php

class SiteTest extends WebTestCase
{

	protected function setUp()
	{
		$this->setBrowser("*chrome");
		$this->setBrowserUrl("http://www.test.com/");
	}

	public function testMyTestCase()
	{
		$this->open("/case.html");
		$this->click("id=word");
		$this->type("id=word", "白色婚礼");
		$this->click("id=search_word");
		$this->waitForPopUp("", "30000");
	}
}
