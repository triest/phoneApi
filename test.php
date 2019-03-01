<?php

require_once('PhoneApi.php');


$phoneApi=new PhoneApi();
$rez=$phoneApi->isValidNumber("+792123189");
echo $rez;
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 01.03.2019
 * Time: 19:26
 */