<?php
require('../vendor/autoload.php');   // path to Composer autoload file

use Razorpay\Api\Api;

// You can pull from .env if you’re using dotenv, or hardcode while testing
$keyId = getenv('RAZORPAY_KEY_ID') ?: 'rzp_test_xxxxxxxx';
$keySecret = getenv('RAZORPAY_KEY_SECRET') ?: 'xxxxxxxxxxxxxxx';

$api = new Api($keyId, $keySecret);
