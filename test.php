<?php

require_once('PhoneApi.php');


$phoneApi = new PhoneApi();
$phoneApi->setSid("AC8ccd9e7f6813b7b921ccbd38f037f19a");
$phoneApi->setToken("cf1e109ed1ca27fcecf1092b80aebdb7");
$rez = $phoneApi->isValidNumber("+79214623189");
if ($rez) {
    echo "true";
} else {
    echo "false";
}




/**
 * Created by PhpStorm.
 * User: triest
 * Date: 01.03.2019
 * Time: 19:26
 */