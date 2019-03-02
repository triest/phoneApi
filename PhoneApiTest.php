<?php

//namespace UnitTestFiles\Test;
use PHPUnit\Framework\TestCase;

require_once('PhoneApi.php');

class PhoneApiTest extends \PHPUnit_Framework_TestCase
{

    /*Test to Valid Number*/
    public function testCorectInputTrue()
    {
        $phoneApi = new PhoneApi("AC8ccd9e7f6813b7b921ccbd38f037f19a", "cf1e109ed1ca27fcecf1092b80aebdb7", "US");
        $this->assertSame(true, $phoneApi->isValidNumber("79214623189"));
    }

    public function testCorrectInputFalse()
    {
        $phoneApi = new PhoneApi("AC8ccd9e7f6813b7b921ccbd38f037f19a", "cf1e109ed1ca27fcecf1092b80aebdb7", "US");
        $this->assertSame(false, $phoneApi->isValidNumber("7926231"));
    }

    public function testInCorrectInput()
    {
        $sid = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
        $token = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
        $countryCode = "EN";
        $type = "carrier";
        $phoneApi = new PhoneApi($sid, $token, $countryCode, $type);
        $this->assertSame(false, $phoneApi->isValidNumber("ddd"));
    }

    public function testInputNull()
    {
        $sid = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
        $token = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
        $countryCode = "EN";
        $type = "carrier";
        $phoneApi = new PhoneApi($sid, $token, $countryCode, $type);
        $this->assertSame(false, $phoneApi->isValidNumber(null));
    }

    public function testNotAoth()
    {
        $sid = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
        $token = "AC8ccd9e7f6ccbd38f037f19a";
        $countryCode = "EN";
        $type = "carrier";
        $phoneApi = new PhoneApi($sid, $token, $countryCode, $type);
        $this->assertSame(false, $phoneApi->isValidNumber(null));
    }

}