<?php
// api/create-order.php (FINAL CLEAN VERSION)

// Use the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../razorpay-config.php';

// A quick check to ensure the $api object from razorpay-config.php was created.
// if (!isset($api)) {
//     http_response_code(500);
//     header('Content-Type: application/json');
//     echo json_encode(['error' => 'Razorpay API client failed to initialize.']);
//     exit;
// }

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['speciality'])) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid request']);
    exit;
}

$speciality = $_POST['speciality'];
$amount = 0;

switch ($speciality) {
    case 'Batsman':
    case 'Bowler':
        $amount = 799;
        break;
    case 'All Rounder':
    case 'Wicketkeeper':
        $amount = 1199;
        break;
    default:
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Invalid specialty selected']);
        exit;
}

$amountInPaise = $amount * 100;
$receiptId = 'ccl_receipt_' . time() . rand(100, 999);

try {
    $orderData = [
        'receipt'         => $receiptId,
        'amount'          => $amountInPaise,
        'currency'        => 'INR',
        'payment_capture' => 1
    ];

    $razorpayOrder = $api->order->create($orderData);
    $razorpayOrderId = $razorpayOrder['id'];

    $_SESSION['razorpay_order_id'] = $razorpayOrderId;
    
    $response = [
        'order_id'      => $razorpayOrderId,
        'razorpay_key'  => KEY_ID,
        'amount'        => $amountInPaise,
        'currency'      => 'INR',
        'name'          => 'Champion Cricket League',
        'description'   => 'Trial Registration Fees',
        'prefill'       => [
            'name'      => htmlspecialchars($_POST['name']),
            'email'     => htmlspecialchars($_POST['email']),
            'contact'   => htmlspecialchars($_POST['phone'])
        ]
    ];

    // This is the only output the script should produce
    header('Content-Type: application/json');
    echo json_encode($response);

} catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Razorpay API Error: ' . $e->getMessage()]);
    exit;
}
?>