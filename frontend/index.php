<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 08/12/17
 * Time: 16:40
 */

$target = "http://webservices-tp.localhost/web/app_dev.php";

$currencies = file_get_contents($target);
$currencies = json_decode($currencies, true);

if (isset($_POST) and !empty($_POST)) {
    $initialCurrencyCode = $_POST['initialCurrencyCode'];
    $targetCurrencyCode = $_POST['targetCurrencyCode'];
    $amount = $_POST['amount'];
    $target .= "/" . $initialCurrencyCode . "/" . $targetCurrencyCode . "/" . $amount;

    $value = file_get_contents($target);

    echo ("Change = $value <hr>");
}

require_once('view.php');