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
   private $sid = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
   private $token = "cf1e109ed1ca27fcecf1092b80aebdb7";
 //  private $client = new Lookups_Services_Twilio($sid, $token);

    function isValidNumber($number)
    {
        //first validate only numbers in input
        if ($this->isCorectInput($number)==false) {
            return false;
        } else {
            // Your Account Sid and Auth Token from twilio.com/user/account
            $sid = "AC8ccd9e7f6813b7b921ccbd38f037f19a";
            $token = "cf1e109ed1ca27fcecf1092b80aebdb7";
            $client = new Lookups_Services_Twilio($sid,
                $token); // Try performing a carrier lookup and return true if successful.
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

    function isCorectInput($number){
        if (preg_match('/^\+?\d+$/', $number)){
            return true;
        }
        else{
            return false;
        }
    }
}