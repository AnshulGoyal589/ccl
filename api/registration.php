<?php include 'header.php'; ?>

<body>
    <!-- The QR code popup and button can be removed as they are no longer needed -->
    <style>
        /* Keep your responsive styles, but the popup styles are now optional */
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
                    
                    <!-- We will handle submission with JavaScript, so the action attribute is not strictly needed -->
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

                        <!-- Submit Button now triggers payment -->
                        <button type="submit" id="submit-btn" class="btn btn-danger w-100">Proceed to Payment</button>
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
                                <tr><td>Batsman</td><td>₹1199/-</td></tr>
                                <tr><td>Bowler</td><td>₹1199/-</td></tr>
                                <tr><td>All Rounder</td><td>₹1499/-</td></tr>
                                <tr><td>Wicket Keeper + Batsman</td><td>₹1499/-</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <!-- You can keep a static QR code for other purposes, or remove it -->
                        <img src="https://res.cloudinary.com/db1szsk6y/image/upload/v1756139103/qr_fx5kov.jpg" alt="Info QR Code" height="250" width="250">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Razorpay Checkout Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registration-form');
        const submitBtn = document.getElementById('submit-btn');

        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Simple client-side validation
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            submitBtn.disabled = true;
            submitBtn.textContent = 'Processing...';

            const formData = new FormData(form);

            // 1. Create Order via AJAX
            fetch('create-order.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Proceed to Payment';
                    return;
                }

                // 2. Open Razorpay Checkout
                const options = {
                    "key": data.razorpay_key,
                    "amount": data.amount,
                    "currency": data.currency,
                    "name": data.name,
                    "description": data.description,
                    "order_id": data.order_id,
                    "handler": function (response) {
                        // 3. On successful payment, verify it on the server
                        // Create a new hidden form to post payment details and original form data
                        const verificationForm = document.createElement('form');
                        verificationForm.method = 'POST';
                        verificationForm.action = 'verify-payment.php';

                        // Add Razorpay response fields
                        for (const key in response) {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = key;
                            input.value = response[key];
                            verificationForm.appendChild(input);
                        }

                        // Add original form data fields
                        formData.forEach((value, key) => {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = key;
                            input.value = value;
                            verificationForm.appendChild(input);
                        });
                        
                        document.body.appendChild(verificationForm);
                        verificationForm.submit();
                    },
                    "prefill": {
                        "name": data.prefill.name,
                        "email": data.prefill.email,
                        "contact": data.prefill.contact
                    },
                    "theme": {
                        "color": "#F37254"
                    },
                    "modal": {
                        "ondismiss": function() {
                            // Re-enable button if user closes the modal without paying
                            alert('Payment was cancelled.');
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Proceed to Payment';
                        }
                    }
                };

                const rzp = new Razorpay(options);
                rzp.open();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
                submitBtn.disabled = false;
                submitBtn.textContent = 'Proceed to Payment';
            });
        });
    });
    </script>

    <?php include 'footer.php'; ?>
</body>