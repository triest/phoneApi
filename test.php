<?php

require_once('PhoneApi.php');


$phoneApi = new PhoneApi();
$rez = $phoneApi->isValidNumber("g");
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