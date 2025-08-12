<?php include 'header.php'; ?>

<body>
    <!-- Add CSS for the popup -->
    <style>
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            max-width: 90%;
            max-height: 90%;
            text-align: center;
        }
        
        .popup-content img {
            max-width: 100%;
            max-height: 60vh;
            object-fit: contain;
        }
        
        .close-popup {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .registraion-form-section .container {
                padding: 10px;
            }
            
            .popup-content {
                padding: 15px;
                width: 95%;
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

    <!-- Popup HTML -->
    <div id="imagePopup" class="popup-overlay">
        <span class="close-popup">&times;</span>
        <div class="popup-content">
            <h4>Payment QR Code</h4>
            <img height="250" width="250" src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969781/qr4_wkvbl6.jpg" alt="QR Code">
            <p>Please scan this QR code to complete your payment.</p>
        </div>
    </div>

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
                    
                    <form id="registration-form" action="reg-submit.php" method="POST">
                        <!-- Name Field -->
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name" required>
                        </div>

                        <!-- Age and Mobile Fields --> 
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" name="age" class="form-control" id="age" placeholder="Your age" min="1"
                                    required>
                            </div>
                            <div class="col">
                                <input type="tel" name="phone" class="form-control" id="mobile" placeholder="Mobile no." required>
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
                                <option value="Bowler"> Bowler</option>
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

                        <!-- Payment button to show QR code -->
                        <div class="mb-3">
                            <button type="button" id="scan-qr-btn" class="btn btn-primary w-100">Scan QR Code to Make Payment</button>
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

                        <!-- Submit Button -->
                        <button type="submit" id="submit-btn" class="btn btn-danger w-100">Submit</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="pricing-box p-4 text-center bg-light rounded shadow-sm">
                        <h3 class="mb-3">Trial Registration Fees</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PLAYER</th>
                                    <th>BASIC FEES</th>
                                    <th>GST</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Batsman</td>
                                    <td>₹999/-</td>
                                    <td>₹179/-</td>
                                    <td>₹1179/-</td>
                                </tr>
                                <tr>
                                    <td>Bowler</td>
                                    <td>₹999/-</td>
                                    <td>₹179/-</td>
                                    <td>₹1179/-</td>
                                </tr>
                                <tr>
                                    <td>All Rounder</td>
                                    <td>₹1299/-</td>
                                    <td>₹234/-</td>
                                    <td>₹1533/-</td>
                                </tr>
                                <tr>
                                    <td>Wicket Keeper + Batsman</td>
                                    <td>₹1299/-</td>
                                    <td>₹234/-</td>
                                    <td>₹1533/-</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="mt-3 mb-3">
                            <strong>STEPS TO REGISTER</strong>
                        </div>
                        <div class="text-end">
                            <img src="./assets/images/idfc-bank.png" alt="IDFC FIRST Bank" height="50">
                        </div> -->
                    </div>
                    <div class="text-center mt-3">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969781/qr4_wkvbl6.jpg" alt="QR Code" height="250" width="250">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for handling the popup -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the elements
            const submitBtn = document.getElementById('submit-btn');
            const scanQrBtn = document.getElementById('scan-qr-btn');
            const popup = document.getElementById('imagePopup');
            const closeBtn = document.querySelector('.close-popup');
            const form = document.getElementById('registration-form');
            
            // Show popup when "Scan QR Code" button is clicked
            scanQrBtn.addEventListener('click', function() {
                popup.style.display = 'flex'; // Show popup
            });
            
            // Close popup when X is clicked
            closeBtn.addEventListener('click', function() {
                popup.style.display = 'none';
            });
            
            // Close popup if user clicks outside content
            popup.addEventListener('click', function(e) {
                if (e.target === popup) {
                    popup.style.display = 'none';
                }
            });
        });
    </script>

    <?php include 'footer.php'; ?>