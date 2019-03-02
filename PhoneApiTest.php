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
        $phoneApi->setSid("AC8ccd9e7f6813b7b921ccbd38f037f19a");
        $phoneApi->setToken("cf1e109ed1ca27fcecf1092b80aebdb7");
        $this->assertSame(true, $phoneApi->isValidNumber("79214623189"));
    }

    public function testCorrectInputFalse()
    {
        $phoneApi = new PhoneApi();
        $phoneApi->setSid("AC8ccd9e7f6813b7b921ccbd38f037f19a");
        $phoneApi->setToken("cf1e109ed1ca27fcecf1092b80aebdb7");
        $this->assertSame(false, $phoneApi->isValidNumber("7926231"));
    }

    public function testInCorrectInput()
    {
        $phoneApi = new PhoneApi();
        $phoneApi->setSid("AC8ccd9e7f6813b7b921ccbd38f037f19a");
        $phoneApi->setToken("cf1e109ed1ca27fcecf1092b80aebdb7");
        $this->assertSame(false, $phoneApi->isValidNumber("ddd"));
    }

    public function testInputNull()
    {
        $phoneApi = new PhoneApi();
        $phoneApi->setSid("AC8ccd9e7f6813b7b921ccbd38f037f19a");
        $phoneApi->setToken("cf1e109ed1ca27fcecf1092b80aebdb7");
        $this->assertSame(false, $phoneApi->isValidNumber(null));
    }

        public function testInputEmpty()
        {
            $phoneApi = new PhoneApi();
            $this->assertSame(false, $phoneApi->isValidNumber("79214623189"));
        }

}