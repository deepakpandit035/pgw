<?php

namespace App\PaymentGateway;

class PaymentProcessor {
    private $gateway;

    public function __construct(PaymentGatewayInterface $gateway) {
        $this->gateway = $gateway;
    }

    public function processPayment($amount) {
        $this->gateway->pay($amount);
    }
}
