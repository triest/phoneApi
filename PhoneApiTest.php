<?php

require_once 'PHPUnit/Framework.php';
require_once('PhoneApi.php');

class PhoneApiTest extends PHPUnit_Framework_TestCase {


    public function TestisCorectInput()
    {
        $phoneApi = new PhoneApi();
        $this->assertEquals(8, $phoneApi->isValidNumber("79214623189", true));
    }
}