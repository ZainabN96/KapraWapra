<?php

require('connection.php'); // Database connection file
require('functions.php');  // Custom functions file

if (isset($_POST['coupon_str'])) {
    $coupon_str = get_safe_value($con, $_POST['coupon_str']); // Sanitize input
    $uid = $_SESSION['USER_ID']; // Assuming user is logged in

    // Check if CART_TOTAL is set
   // Check if CART_TOTAL is set
   if (!isset($_SESSION['cart']) || !is_numeric($_SESSION['cart'])) {
    echo json_encode([
        'is_error' => 'yes',
        'dd' => 'Cart total is missing or invalid. Please try again.',
        'result' => ''
    ]);
    exit;
}

// If cart is valid, assign total price
$total_price = $_SESSION['cart'];

// Debugging: Check if it's numeric
error_log('Total Price: ' . print_r($total_price, true)); // Check if it's numeric



// Debugging: Check the value of $total_price
error_log('Total Price: ' . print_r($total_price, true)); // Logs the value to check if it's numeric

// Fetch coupon details
$coupon_query = "SELECT * FROM coupon_master WHERE coupon_code='$coupon_str'";
$coupon_result = mysqli_query($con, $coupon_query);

if (!$coupon_result) {
    echo json_encode([
        'is_error' => 'yes',
        'dd' => 'Database error: ' . mysqli_error($con),
        'result' => ''
    ]);
    exit;
}

if (mysqli_num_rows($coupon_result) > 0) {
    $coupon_data = mysqli_fetch_assoc($coupon_result);

    // Validate coupon data
    if (!isset($coupon_data['cart_min_value']) || !isset($coupon_data['coupon_value'])) {
        echo json_encode([
            'is_error' => 'yes',
            'dd' => 'Coupon data is incomplete. Please contact support.',
            'result' => ''
        ]);
        exit;
    }

    // Check minimum order value
    if ($total_price < $coupon_data['cart_min_value']) {
        echo json_encode([
            'is_error' => 'yes',
            'dd' => 'Your cart total is below the minimum required to use this coupon.',
            'result' => ''
        ]);
        exit;
    }

    // Calculate discount
    $discount = 0;
    if ($coupon_data['coupon_type'] == 'flat') {
        $discount = $coupon_data['coupon_value'];
    } elseif ($coupon_data['coupon_type'] == 'percent') {
        $discount = ($total_price * $coupon_data['coupon_value']) / 100;
    }

    // Ensure discount doesn't exceed cart total
    $discount = min($discount, $total_price);

    // Return success response
    $new_total = $total_price - $discount;
    echo json_encode([
        'is_error' => 'no',
        'dd' => "Discount Applied: $discount",
        'result' => $new_total
    ]);
} else {
    echo json_encode([
        'is_error' => 'yes',
        'dd' => 'Invalid coupon code.',
        'result' => ''
    ]);
}
exit;
}

?>
