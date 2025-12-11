<?php include 'header.php'; ?>

<body>
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 class="display-4">Thank You!</h1>
                <p class="lead">Your payment was successful and your registration is confirmed.</p>
                <hr>
                <p>You will receive a confirmation email with your trial details shortly.</p>
                <?php
                if (isset($_GET['payment_id'])) {
                    echo "<p>Your Payment ID is: <strong>" . htmlspecialchars($_GET['payment_id']) . "</strong></p>";
                }
                ?>
                <a href="/" class="btn btn-primary mt-3">Back to Home</a>
            </div>
        </div>
    </div>

    <?php 
    // OPTIONAL BUT RECOMMENDED:
    // You can use the payment_id and order_id from the URL to update
    // your database record's status from 'pending' to 'completed'.
    // require('db_connection.php');
    // if(isset($_GET['payment_id']) && isset($_GET['order_id'])) {
    //     $payment_id = htmlspecialchars($_GET['payment_id']);
    //     $order_id = htmlspecialchars($_GET['order_id']);
    //     // Update database: SET payment_status = 'completed', payment_id = ? WHERE razorpay_order_id = ?
    // }
    ?>

    <?php include 'footer.php'; ?>
</body>