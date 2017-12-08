<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 08/12/17
 * Time: 16:40
 */

var $target = "http://webservices-tp.localhost/web/app.php";

if (isset($_POST) and !empty($_POST)) {
    $initialCurrencyCode = $_POST['initialCurrencyCode'];
    $targetCurrencyCode = $_POST['targetCurrencyCode'];
    $amount = $_POST['amount'];
    $target .= $initialCurrencyCode . "/" . $targetCurrencyCode . "/" . $amount;

    $value = file_get_contents($target);
}