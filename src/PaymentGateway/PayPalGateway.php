<?php

namespace App\PaymentGateway;

class PayPalGateway implements PaymentGatewayInterface {
    public function pay($amount) {
        // Implement PayPal payment logic here
        echo "Paying $amount using PayPal.";
    }
}
