<?php

use Osen\Mpesa\STK;

require_once "./vendor/autoload.php";

STK::init(
    array(
        "env"               => "sandbox",
        "type"              => 4, // For Paybill, or, 2 for Till, 1	for MSISDN
        "shortcode"         => "174379",
        "headoffice"        => "174379", // Ignore if using Paybill
        "key"               => "34Wwq9hFzSFluyz0p8vpfxpB4ThG3Yu5",// Your Consumer Key
        "secret"            => "0FVpNclgqGipKbWC",// Your Consumer Secret
        "username"          => "", // Required for B2B and B2C APIs only
        "password"          => "", // Required for B2B and B2C APIs only
        "passkey"           => "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919",// online pass key
        "validation_url"    => "www.petachrobotics.co.ke/mpesa.txt",
        "confirmation_url"  => "www.petachrobotics.co.ke/mpesa.txt",
        "callback_url"      => "https://mydomain.com/path",
        "results_url"       => "www.petachrobotics.co.ke"
    )
);

if (isset($_POST['phone'])) {
    $res = STK::send($_POST['phone'], $_POST['amount'], $_POST['reference']);
    var_dump($res);
    // Do something with $res, like save to DB with the $res["MerchantRequestID"] as key.
}

if (isset($_GET['reconcile'])) {
    header('Content-Type: application/json');

    echo STK::reconcile(function ($response) {
        return json_encode($response);
    });
}

if (isset($_GET['confirm'])) {
    header('Content-Type: application/json');

    echo STK::confirm(function ($response) {
        return json_encode($response);
    });
}
