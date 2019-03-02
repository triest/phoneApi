<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 01.03.2019
 * Time: 19:24
 */
require "vendor/autoload.php";

class PhoneApi
{
    private $sid;
    private $token;
    private $countryCode;

    /**
     * PhoneApi constructor.
     *
     * @param $sid
     * @param $token
     */
    public function __construct($sid, $token, $countryCode)
    {
        $this->sid = $sid;
        $this->token = $token;
        $this->countryCode = $countryCode;
    }


    //  private $client = new Lookups_Services_Twilio($sid, $token);

    function isValidNumber($number)
    {
        //first validate only numbers in input
        if ($this->isCorectInput($number) == false or empty($number) or empty($this->sid) or empty($this->token)) { //add check empty token ans sin
            return false;
        } else {
            // Your Account Sid and Auth Token from twilio.com/user/account
            $client = new Lookups_Services_Twilio($this->sid,
                $this->token); // Try performing a carrier lookup and return true if successful.
            try {
                $number = $client->phone_numbers->get($number, array("CountryCode" => "US", "Type" => "carrier"));
                $number->carrier->type; // Should throw an exception if the number doesn't exist.
                return true;
            } catch (Exception $e) {
                // If a 404 exception was encountered return false.
                if ($e->getStatus() == 404) {
                    return false;
                } else {
                    throw $e;
                }
            }
        }
    }

    //check input is number
    function isCorectInput($number)
    {
        if (preg_match('/^\+?\d+$/', $number)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param string $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}