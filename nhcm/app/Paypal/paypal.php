<?php

namespace App\Paypal;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payer;


class paypal{

	protected $apiContext;

    function __construct(){

        $this->apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                config("services.paypal.id"),  // ClientID
                config("services.paypal.secret")     // ClientSecret
                )
            );
    }
    

}
