<?php
// process_checkout.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payment_method = $_POST['payment_method'];
    $customer_id = $_settings->userdata('id');
    $gt = $_POST['grand_total']; // Assuming grand total is passed from the form

    // Process the order based on the payment method
    if ($payment_method == 'cod') {
        // Insert order into the database with 'Cash on Delivery' as the payment method
        $insert_order = $conn->query("INSERT INTO orders (customer_id, total_amount, payment_method, status) VALUES ('$customer_id', '$gt', 'Cash on Delivery', 'Pending')");

        if ($insert_order) {
            echo "<script>alert('Order placed successfully!'); location.replace('./');</script>";
        } else {
            echo "<script>alert('Failed to place the order. Please try again.'); location.replace('./');</script>";
        }
    } else {
        // Handle other payment methods
    }
}
?>
