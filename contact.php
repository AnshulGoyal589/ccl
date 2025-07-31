<?php include 'header.php'; ?>


<style>
    .dots {
        justify-content: left;
        padding: 10px 0;
    }
</style>

<section class="contact-section bg-light">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-div">
                    <h1>
                        Get in Touch</h1>
                    <p>
                        "Have questions, need information, or looking for support on your cricket journey? We’re here to
                        help—reach out to us anytime!"
                    </p>
                </div>

            </div>
        </div>
    </div>

</section>
<section class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <div class="dots text-left">
                    <div class="dot1"> </div>
                    <div class="dot1"></div>
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
                <p>If you have any questions or feedback, please share with Us. We're here to assist you.</p>

                <div class="contact-details">
                    <div class="py-4">
                        <a><i class="fa-solid fa-location-dot"></i> Building no. 13 Suraj vihar 1st floor beside Triumph
                            Dwarka (New Delhi -110078)</a><br>
                        <a><i class="fa-solid fa-envelope"></i> championcricketleague@outlook.com  </a><br>
                         <a> <i class="fa-regular fa-clock"></i> Time 10 AM - 7 PM</a><br>
                        <a><i class="fa-solid fa-phone"></i> 011 69311383</a><br>
                         <a><i class="fa-brands fa-whatsapp"></i> +91 7827434237</a><br>
                          <!--<a><i class="fa-solid fa-phone"></i> +91 08069377899</a><br>-->
                          
                         

                    </div>

                    <div class="icon-div-contact">
                        <a>Keep in Touch</a>

                        <a href="https://x.com/CCL_IND"> <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/champion-cricket-league"><i
                                class="fa-brands fa-linkedin"></i></a>

                        <a href="https://www.instagram.com/champion_cricket_league/"><i
                                class="fa-brands fa-instagram"></i></a>
                                         <a href="https://www.facebook.com/share/ZcPYAj9NXQmknsGj/?mibextid=LQQJ4d"><i class="fa-brands fa-facebook-f"></i></a>

                        <a href="https://youtube.com/@champion_cricket_league_ccl?si=IrIeZfoINayHkbXN"><i class="fa-brands fa-youtube"></i></a>

                    </div>
                    <div class="map py-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.563116695375!2d77.0272761792777!3d28.612880422274856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0549c0522553%3A0x1650ca235dc8730!2zUlovMTNBLCDgpLjgpYLgpLDgpJwg4KS14KS_4KS54KS-4KSwLCDgpKbgpY3gpLXgpL7gpLDgpJXgpL4sIE5ldyBEZWxoaSwg4KSm4KS_4KSy4KWN4KSy4KWALCAxMTAwNzg!5e0!3m2!1shi!2sin!4v1731493215930!5m2!1shi!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-card">
                    <h4>
                        <b>Have Questions?</b>
                    </h4>
                    <p>
                        Have questions or need assistance? Fill out our contact form, and our team will get back to you
                        shortly.
                    </p>
                    <form class="p-3" method="POST" action="contact-submit.php"> 
                        <div class="mb-3">

                            <label for="tname" class="form-label">Name</label>
                            <input type="text" placeholder="Enter Your Name" name="name" required class="form-control" id="tname"
                                aria-describedby="emailHelp">

                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" placeholder="Enter Phone Number" name="phone" required class="form-control" id="phone"
                                aria-describedby="emailHelp">

                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" placeholder="Enter Your Email Address" required name="email" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">

                            <label for="message" class="form-label">Message</label>
                            <textarea type="" placeholder="Enter Your Message" name="message"  class="form-control" id="message"
                                aria-describedby="emailHelp"></textarea>


                        </div>

                        <button type="submit" name="contact-submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>