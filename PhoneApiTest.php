<?php

//namespace UnitTestFiles\Test;
use PHPUnit\Framework\TestCase;

require_once('PhoneApi.php');

class PhoneApiTest extends \PHPUnit_Framework_TestCase
{

    /*Test to Valid Number*/
    public function testCorectInputTrue()
    {
        $phoneApi = new PhoneApi();
        $this->assertSame(true, $phoneApi->isValidNumber("79214623189"));
    }

    public function testCorectInputFalse()
    {
        $phoneApi = new PhoneApi();
        $this->assertSame(false, $phoneApi->isValidNumber("7926231"));
    }

    public function testInCorectInput()
    {
        $phoneApi = new PhoneApi();
        $this->assertSame(false, $phoneApi->isValidNumber("ddd"));
    }
}