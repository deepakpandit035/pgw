<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Factory\PaymentGatewayFactory;
use App\PaymentGateway\PaymentProcessor;

// Load configuration
$config = require __DIR__ . '/../config/config.php';

// Create a payment gateway instance
$gatewayType = 'paypal'; // This can be dynamically set based on user input or configuration
$gateway = PaymentGatewayFactory::create($gatewayType);

// Process a payment
$paymentProcessor = new PaymentProcessor($gateway);
$paymentProcessor->processPayment(100);
