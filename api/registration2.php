<?php include 'header.php'; ?>

<body>
    <style>
        /* Responsive styles */
        @media (max-width: 768px) {
            .registraion-form-section .container {
                padding: 10px;
            }
            .col-md-4.mt-4 {
                margin-top: 20px;
                text-align: center;
            }
            .col-md-4.mt-4 img {
                max-width: 250px;
                margin: 0 auto;
            }
        }
    </style>

    <section class="registraion-form-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 text-black">
                    <div class="text-center">
                        <h5>REGISTER NOW</h5>
                        <h5>For</h5>
                        <h2>Champion Cricket League</h2>
                        <h6 class="text-center mb-4">ALL FIELDS IN THE FORM ARE MANDATORY</h6>
                    </div>
                    
                    <form id="registration-form" method="POST">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
                        </div>

                        <!-- Age and Mobile Fields --> 
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" name="age" class="form-control" id="age" placeholder="Your age" min="1" required>
                            </div>
                            <div class="col">
                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Mobile no." required pattern="[6-9]{1}[0-9]{9}">
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your email id" required>
                        </div>

                        <!-- Specialty Dropdown -->
                        <div class="mb-3">
                            <select class="form-select" name="speciality" id="speciality" required>
                                <option value="" disabled selected>Select your specialty</option>
                                <option value="Bowler">Bowler</option>
                                <option value="Batsman">Batsman</option>
                                <option value="Wicketkeeper">Wicketkeeper/Batsman</option>
                                <option value="All Rounder">All Rounder</option>
                            </select>
                        </div>

                        <!-- State and City Fields -->
                        <div class="row mb-3">
                            <div class="col">
                                <select class="form-select" name="state" id="state" required>
                                    <option value="">State</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value=" Jammu & Kashmir"> Jammu & Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                            </div>
                        </div>
                        
                        <!-- Referral Code Field -->
                        <div class="mb-3">
                           <input type="text" name="c-code" class="form-control" id="c-code" placeholder="Your Referral Code">
                           <p class="text-black">Leave this box blank if you do not have a code.</p>
                        </div>

                        <!-- Terms & Conditions Checkbox -->
                        <div class="mb-3 form-check text-black">
                            <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><a href="terms-conditions.php" class="text-black" >Terms & Conditions</a></label>
                        </div>

                        <!-- UPDATED: Button text changed for clarity -->
                        <button type="submit" id="submit-btn" class="btn btn-danger w-100">Submit Registration</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="pricing-box p-4 text-center bg-light rounded shadow-sm">
                        <h3 class="mb-3">Trial Registration Fees</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr><th>PLAYER</th><th>TOTAL FEES</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Batsman</td><td>₹799/-</td></tr>
                                <tr><td>Bowler</td><td>₹799/-</td></tr>
                                <tr><td>All Rounder</td><td>₹1199/-</td></tr>
                                <tr><td>Wicket Keeper + Batsman</td><td>₹1199/-</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW: Bootstrap Modal for Payment Confirmation -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Registration Submitted!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you! Your details have been successfully received.</p>
                    <p>To finalize your spot, please complete the payment.</p>
                    <h4 class="text-center">Amount to Pay: <strong id="payment-amount"></strong></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="proceed-to-payment-btn" class="btn btn-success">Proceed to Payment</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Razorpay Checkout Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
    <!-- COMPLETELY REVISED SCRIPT -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to our elements
        const form = document.getElementById('registration-form');
        const submitBtn = document.getElementById('submit-btn');
        const paymentModalElement = document.getElementById('paymentModal');
        const paymentModal = new bootstrap.Modal(paymentModalElement);
        const proceedToPaymentBtn = document.getElementById('proceed-to-payment-btn');
        const paymentAmountSpan = document.getElementById('payment-amount');

        // This variable will hold the order details from the server
        let razorpayOrderData = null;

        // 1. Handle the initial form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';

            const formData = new FormData(form);

            fetch('process-registration2.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Submit Registration';
                    return;
                }

                // SUCCESS! Store the server response and show our custom modal
                razorpayOrderData = data; 
                
                // Display the amount in the modal (convert paise to rupees)
                const amountInRupees = data.amount / 100;
                paymentAmountSpan.textContent = `₹${amountInRupees.toFixed(2)}/-`;

                // Show the modal popup
                paymentModal.show(); 

                // Reset the submit button so user can try again if they cancel
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Registration';
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during submission. Please try again.');
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit Registration';
            });
        });

        // 2. Handle the "Proceed to Payment" button click FROM THE MODAL
        proceedToPaymentBtn.addEventListener('click', function() {
            if (!razorpayOrderData) {
                alert('Payment details are missing. Please submit the form again.');
                return;
            }

            // Hide our custom modal before opening Razorpay's modal
            paymentModal.hide(); 

            const options = {
                "key": razorpayOrderData.razorpay_key,
                "amount": razorpayOrderData.amount,
                "currency": razorpayOrderData.currency,
                "name": razorpayOrderData.name,
                "description": razorpayOrderData.description,
                "order_id": razorpayOrderData.order_id,
                "handler": function (response) {
                    alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                    window.location.href = "thank-you.php?payment_id=" + response.razorpay_payment_id + "&order_id=" + response.razorpay_order_id;
                },
                "prefill": razorpayOrderData.prefill,
                "theme": {
                    "color": "#F37254"
                },
                "modal": {
                    "ondismiss": function() {
                        alert('Payment was cancelled. Your registration is incomplete. You can click "Proceed to Payment" again from the popup.');
                        // Optionally, you could re-show your modal here if needed
                        // paymentModal.show();
                    }
                }
            };

            const rzp = new Razorpay(options);
            rzp.open();
        });
    });
    </script>

    <?php include 'footer.php'; ?>
    
    <!-- 
    IMPORTANT: Make sure Bootstrap's JavaScript is included on your page for the modal to work. 
    It is usually in footer.php or can be added here.
    Example: <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    -->
</body>