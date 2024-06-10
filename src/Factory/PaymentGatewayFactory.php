<?php

namespace App\Factory;

use App\PaymentGateway\PayPalGateway;
use App\PaymentGateway\StripeGateway;
use App\PaymentGateway\PaymentGatewayInterface;

class PaymentGatewayFactory {
    public static function create($type): PaymentGatewayInterface {
        switch ($type) {
            case 'paypal':
                return new PayPalGateway();
            case 'stripe':
                return new StripeGateway();
            default:
                throw new \Exception("Unsupported payment gateway type.");
        }
    }
}
