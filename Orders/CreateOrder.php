<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../RazorpaySetup/Razorpayconfig.php');

header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$amount = $data['amount'];

$orderData = [
    'receipt'         => 'rcptid_11',
    'amount'          => $amount,
    'currency'        => 'INR',
    'payment_capture' => 1
];

$razorpayOrder = $api->order->create($orderData);

echo json_encode($razorpayOrder);
?>
