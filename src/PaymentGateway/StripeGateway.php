<?php

namespace App\PaymentGateway;

class StripeGateway implements PaymentGatewayInterface {
    public function pay($amount) {
        // Implement Stripe payment logic here
        echo "Paying $amount using Stripe.";
    }
}
