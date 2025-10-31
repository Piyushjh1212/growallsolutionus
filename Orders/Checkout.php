<?php
require('vendor/autoload.php');
include('config.php');

use Razorpay\Api\Api;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'] * 100; // Convert to paise

    $api = new Api(RAZORPAY_KEY_ID, RAZORPAY_KEY_SECRET);

    $orderData = [
        'receipt'         => 'rcptid_' . rand(1000,9999),
        'amount'          => $amount,
        'currency'        => 'INR',
        'payment_capture' => 1 // Auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);

    $order_id = $razorpayOrder['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay with Razorpay</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <form id="razorpay-form">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?php echo RAZORPAY_KEY_ID; ?>"
            data-amount="<?php echo $amount; ?>"
            data-currency="INR"
            data-order_id="<?php echo $order_id; ?>"
            data-buttontext="Pay with Razorpay"
            data-name="Your Company"
            data-description="Test Transaction"
            data-prefill.name="<?php echo $name; ?>"
            data-prefill.email="<?php echo $email; ?>"
            data-theme.color="#F37254"
        ></script>
        <input type="hidden" custom="Hidden Element" name="hidden">
    </form>
</body>
</html>
