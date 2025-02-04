<?php
require('vendor/autoload.php');

use Razorpay\Api\Api;

$api = new Api('your_razorpay_key_id', 'your_razorpay_key_secret');

$payment_id = $_POST['payment_id'];
$amount = $_POST['amount'];

try {
    $payment = $api->payment->fetch($payment_id);
    if ($payment->amount == $amount && $payment->status == 'captured') {
        // Payment is successful and captured
        // Update your order status in the database

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Payment amount mismatch or not captured']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
