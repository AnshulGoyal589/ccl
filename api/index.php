<?php include 'header.php'; ?>

<style>
    .close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
        z-index: 999;
        background-color: black;
        padding: 0px 5px;
    }

    .gallery {
        padding: 0px;
    }
    
    .banner-video {
    width: 100%;
}
</style>

<!-- start banner  -->
<section >
     <video class="banner-video" autoplay loop muted playsinline preload="auto">
        <source src="https://res.cloudinary.com/dxk6wjttq/video/upload/v1753965775/banner_q6n28s.mp4"  type="video/mp4">
        Your browser does not support the video tag.
    </video>
    
</section>

<!--<section class="banner-section">-->
<!--    <div class="banner-carousel laptop-view owl-carousel owl-theme">-->
<!--        <div class="item">-->
<!--            <img src="./assets/images/banner-laptop.jpg" width="100%" alt="banner-image">-->
<!--        </div>-->

<!--    </div>-->

<!--    <div class="banner-carousel mobile-view owl-carousel owl-theme">-->
<!--        <div class="item">-->
<!--            <img src="./assets/images/banner-mobile.jpg" width="100%" alt="banner-image">-->
<!--        </div>-->

<!--    </div>-->

<!--</section>-->
<!--  end banner  -->
<!-- about section start -->

<div class="container py-2 py-lg-5">
    <div class="row py-4">
        <div class="col-md-8 mt-5 pt-lg-5">
            <h3 class="section animate-on-scroll slide-right">About Champion Cricket League</h3>
            <p class="section animate-on-scroll slide-left">Welcome to Champion Cricket League, where passion meets
                excellence! Established with the mission
                to nurture and develop the next generation of cricket stars, our academy is committed to providing a
                professional and enriching environment for young, aspiring cricketers.</p>
            <p class="section animate-on-scroll slide-left">
                At Champion Cricket League, we believe that every budding talent deserves the opportunity to
                unlock their full potential. Our state-of-the-art facilities, combined with expert coaching from
                experienced professionals, ensure that players not only learn the fundamentals of the game but also
                develop the skills needed to excel at higher levels.
            </p>
            <a class="section animate-on-scroll slide-right" href="about.php">Know More <i
                    class="fa-solid fa-angle-right"></i>
                <i class="fa-solid fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 py-3">
            <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760028219/6d0a2ed1-d067-4fb4-8053-5cc92578186b_ev2yy0.jpg" class="w-100 about-image" alt="about-image">
        </div>
    </div>

</div>

<!-- about section end -->



<!-- start selction process section -->

<section class="selection-process py-5">
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-black py-4">
                    <h1>Gallery</h1>
                    <div class="dots text-center">
                        <div class="dot1"> </div>
                        <div class="dot1"></div>
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>

                <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753967924/39b04034-fefd-4e8d-add0-1bd0301f5fb8.png" alt="Image 1" onclick="openLightbox(); setCurrentSlide(1)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968295/24728768-971b-4094-bccf-9e156948a789.png" alt="Image 2" onclick="openLightbox(); setCurrentSlide(2)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968365/d7e04e5a-cbb4-473d-8f56-1c38fcf12969.png" alt="Image 3" onclick="openLightbox(); setCurrentSlide(3)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968409/06470fa5-1e26-44e3-a090-7f7482f8f7f3.png" alt="Image 4" onclick="openLightbox(); setCurrentSlide(4)">

                </div>
                <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968444/61a7373b-0519-49b7-a1be-6de10c65a469.png" alt="Image 5" onclick="openLightbox(); setCurrentSlide(5)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968495/32c101b6-2f62-49c5-a036-933ee2cb2805.png" alt="Image 6" onclick="openLightbox(); setCurrentSlide(6)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968533/c17dfadd-9c6b-4d2b-aaad-01bbd1437eb8.png" alt="Image 7" onclick="openLightbox(); setCurrentSlide(7)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968563/8d46ea83-019d-487e-8000-ee2d6a0fe36b.png" alt="Image 8" onclick="openLightbox(); setCurrentSlide(8)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968599/efd49f42-4229-49aa-98f1-8e11076fe877.png" alt="Image 9" onclick="openLightbox(); setCurrentSlide(9)">

                </div>
                <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968696/e3346a00-f2a2-4193-aa3a-3e9f87b2c5f2.png" alt="Image 10" onclick="openLightbox(); setCurrentSlide(10)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969362/5380f8f0-3796-4471-8386-6886ebc84bbf.png" alt="Image 11" onclick="openLightbox(); setCurrentSlide(11)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969591/g12_enjb82.jpg" alt="Image 12" onclick="openLightbox(); setCurrentSlide(12)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969592/g13_qefis7.jpg" alt="Image 13" onclick="openLightbox(); setCurrentSlide(13)">

                </div>
                <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969593/g14_jumco5.jpg" alt="Image 14" onclick="openLightbox(); setCurrentSlide(14)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753974606/g15_i9y3c9.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(15)">
                    <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969654/g16_hcjji1.jpg" alt="Image 16" onclick="openLightbox(); setCurrentSlide(16)">

                </div>
            </div>
            
            <div class="row">
               <div class="col-md-12 mt-5 text-black text-center py-4">
                    <h1>Delhi NCR Trial</h1>
                    <div class="dots text-center">
                        <div class="dot1"> </div>
                        <div class="dot1"></div>
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>

                 <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030340/IMG_8613_fyc9at.jpg" alt="Image 14" onclick="openLightbox(); setCurrentSlide(17)">
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030340/IMG_8611_m8pwkx.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(18)">
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8603_lwbztj.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(19)">
                   

                </div>
                 <div class="col-md-3 col-3">

                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8605_s09ol4.jpg" alt="Image 14" onclick="openLightbox(); setCurrentSlide(20)">
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8591_ojf25d.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(21)">
                    
                    
                </div>
                <div class="col-md-3 col-3">
                    
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8600_x5acdi.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(22)">
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8584_xaa4cq.jpg" alt="Image 14" onclick="openLightbox(); setCurrentSlide(23)">
                    
                </div>
                <div class="col-md-3 col-3">
                    
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030339/IMG_8596_fnpvbp.jpg" alt="Image 15" onclick="openLightbox(); setCurrentSlide(24)">
                    <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760030338/IMG_8582_s1juld.jpg" alt="Image 16" onclick="openLightbox(); setCurrentSlide(24)">
                    
                </div>
            </div>
            
        </div>

    </div>

</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <div class="lightbox-content">

        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753967924/39b04034-fefd-4e8d-add0-1bd0301f5fb8.png" alt="Slide 1">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968295/24728768-971b-4094-bccf-9e156948a789.png" alt="Slide 2">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968365/d7e04e5a-cbb4-473d-8f56-1c38fcf12969.png" alt="Slide 3">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968409/06470fa5-1e26-44e3-a090-7f7482f8f7f3.png" alt="Slide 4">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968444/61a7373b-0519-49b7-a1be-6de10c65a469.png" alt="Slide 5">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968495/32c101b6-2f62-49c5-a036-933ee2cb2805.png" alt="Slide 6">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968533/c17dfadd-9c6b-4d2b-aaad-01bbd1437eb8.png" alt="Slide 7">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968563/8d46ea83-019d-487e-8000-ee2d6a0fe36b.png" alt="Slide 8">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968599/efd49f42-4229-49aa-98f1-8e11076fe877.png" alt="Slide 9">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753968696/e3346a00-f2a2-4193-aa3a-3e9f87b2c5f2.png" alt="Slide 10">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969362/5380f8f0-3796-4471-8386-6886ebc84bbf.png" alt="Slide 11">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969591/g12_enjb82.jpg" alt="Slide 12">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969592/g13_qefis7.jpg" alt="Slide 13">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969593/g14_jumco5.jpg" alt="Slide 14">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753974606/g15_i9y3c9.jpg" alt="Slide 15">
        </div>
        <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969654/g16_hcjji1.jpg" alt="Slide 16">
        </div>
        
        
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961121/fdb44b97-6db3-4592-9d0a-571c7144328f.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961179/399eacf0-91db-4f07-8dd3-14e55f453ae7.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961455/decab115-760b-4a65-9e24-7fc9223420bc.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961239/d534071e-e4ce-4455-8b24-982dbf7f7d6c.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961275/131d2169-60ab-42b4-be7a-2837e967e248.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961489/05539b18-7c71-43d3-a717-488591d660ab.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961311/f723314b-2858-4116-b4e9-6f6f9acf1ee5.png" alt="Slide 16">
        </div>
          <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961346/c2a08f5a-ab6c-43d3-97f8-7612b22b6061.png" alt="Slide 16">
        </div>
        
         <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961385/3fa2fcd9-aed9-433e-9b66-f5b2fc95fc2f.png" alt="Slide 16">
        </div>
         <div class="lightbox-slide">
            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753961421/94fab1ca-fb8e-4b08-b002-d300f37374ed.png" alt="Slide 16">
        </div>


    </div>
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>

<!-- end seleciton process section -->




<!-- start faq section -->
<section class="faq-section">
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6 ">
                 <video class="banner-video" autoplay loop muted playsinline preload="auto">
                    <source src="https://res.cloudinary.com/dxk6wjttq/video/upload/v1753967837/faq_rbkhz7.mp4"  type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!--<img src="./assets/images/faq.mp4" class="w-100 mt-5" alt="faq-image">-->
            </div>
            <div class="col-md-6 py-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item section animate-on-scroll slide-left">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <i class="fa-solid fa-caret-right"></i> &nbsp; Registration and Initial Selection
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Registration Fee: INR 999
                                (+ GST) for regular players; INR 1299 +
                                GST for all-rounders.
                            </div>
                        </div>
                    </div>

                  


                    <div class="accordion-item section animate-on-scroll slide-left">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <i class="fa-solid fa-caret-right"></i> &nbsp; How do I register for the academy?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can register online through our website or visit our academy
                                office to fill out the registration form. If you have any questions, feel free to
                                contact us.
                            </div>
                        </div>
                    </div>





                    <div class="accordion-item section animate-on-scroll slide-left">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                <i class="fa-solid fa-caret-right"></i> &nbsp; What is included in the training program?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Our training program includes batting, bowling, fielding,
                                fitness conditioning, and match simulations. We focus on developing both physical skills
                                and game strategy.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item section animate-on-scroll slide-left">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                <i class="fa-solid fa-caret-right"></i> &nbsp; Are the coaches certified?
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, all our coaches are certified with extensive experience in
                                training young cricketers. Many of them have played at national 
                                levels.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item section animate-on-scroll slide-left">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false"
                                aria-controls="flush-collapseNine">
                                <i class="fa-solid fa-caret-right"></i> &nbsp; Do you provide any trial classes?
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we offer 3 free trial session for new students. This allows
                                players to experience our training environment before committing to a program.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end faq section -->







<!-- start advantages section -->

<section class="advantages-section selection-process text-black py-5">
    <div class="container py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>Champion Cricket League</h1>
                    <h6>Discover the exclusive benefits and opportunities Champion Cricket League offers to elevate your
                        cricket
                        journey.</h6>
                </div>
            </div>
            <div class="row advantage">
                <div class="col-md-3 col-6">
                    <div class="item-img section animate-on-scroll slide-left">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859505/1_c6iwt4.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">
                            <div class="text"><b>Low Registration Fees</b><br>
                                <span>BENEFITS</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859628/2_xqoh6n.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">

                            <div class="text"><b>Expert Coaching</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img ">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859693/3_cmsn5m.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">

                            <div class="text"><b>Grand Rewards</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img section animate-on-scroll slide-right">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859723/4_tsiqdd.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">


                            <div class="text"><b>Top-Quality Facilities</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img section animate-on-scroll slide-left">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859787/5_cam8lc.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">

                            <div class="text"><b>Meet Scouts and Experts</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img ">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859870/6_yixwzo.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">

                            <div class="text"><b>Fair and Fun Matches</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859919/7_r38ntp.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">

                            <div class="text"><b> Team Spirit</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-6">
                    <div class="item-img section animate-on-scroll slide-right">
                        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859969/8_ide0e1.png" alt="advantages-image">
                        <div class="overlay bottom-overlay">
                            <div class="text"><b>Improve Your Skills</b>
                                <br>
                                <span>BENEFITS</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
</section>

<!-- end advantages section -->


<!-- map section start -->
<section class="map-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section id="counter_two" class="counter_two-index ">
                    <div class="overlay-timer">
                        <div class="container">
                            <div class="main_counter_two sections text-center">

                                <div class="row justify-content-center py-5">
                                    <div class="col-md-3 col-6">
                                        <div class="single_counter_two_right-index">

                                            <h2>

                                                <span class="counter_up" data-number="20">1</span> +
                                            </h2>
                                            <p class="text-center">States</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single_counter_two_right-index">
                                            <h2>

                                                <span class="counter_up" data-number="3000">1</span> +
                                            </h2>
                                            <p class="text-center">Matches played</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single_counter_two_right-index">
                                            <h2>

                                                <span class="counter_up" data-number="10">1</span> +
                                            </h2>
                                            <p class="text-center">Years Experience</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="single_counter_two_right-index">
                                            <h2>

                                                <span class="counter_up" data-number="70000">1</span> +
                                            </h2>
                                            <p class="text-center">Registered Player's</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969689/map_twpggp.png" class="mx-auto d-block section animate-on-scroll slide-up"
                    alt="map">
            </div>
        </div>
    </div>
</section>

<!-- end map section -->

<!-- loation where we play match -->
<section class="bg-white">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5">Trail Locations</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container-fluid">
                    <!-- Row for Rajasthan -->
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="state-box">Gujarat</div>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col connector">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row text-center mb-4">

                        <div class="col">
                            <div class="city-box">Vadodara</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Ahmedabad</div>
                        </div>
                    </div>

                    <!-- Row for Madhya Pradesh -->
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="state-box">Madhya Pradesh (MP)</div>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col connector">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="city-box">Bhopal (Centre)</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Indore (West)</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Gawalior (North)</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Jabalpur (East)</div>
                        </div>

                    </div>

                  

                    <!-- Row for Himachal Pradesh -->
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="state-box">Haryana (HR)</div>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col connector">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="city-box">Rohtak</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Hisar</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Gurugram</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Kurukshetra</div>
                        </div>

                    </div>

                    <!-- Row for j&k -->
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="state-box">Jammu Kashmir (J&K)</div>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col connector">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="city-box">Jammu</div>
                        </div>
                        <div class="col">
                            <div class="city-box">Srinagar</div>
                        </div>
                    </div>
                    
                    
                    <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Uttarakhand (UK)</div>
                        </div>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col connector">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="city-box">Dehradun</div>
                        </div>
                    </div>
                    
                     <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Jharkhand</div>
                        </div>
                    </div>
                    <!--<div class="row text-center mt-2">-->
                    <!--    <div class="col connector">-->
                    <!--        <div class="line"></div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row text-center mb-4">-->
                    <!--    <div class="col">-->
                    <!--        <div class="city-box">Dehradun</div>-->
                    <!--    </div>-->
                    <!--</div>-->
                
                
                    
                </div>
            </div>
            <div class="col-md-6">
                <!-- Row for Rajasthan -->
                <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Rajasthan (RJ)</div>
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col connector">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="city-box">Jodhpur</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Jaipur</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Kota</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Bikaner</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Jaisalmer</div>
                    </div>
                </div>

                <!-- Row for Uttar Pradesh -->
                <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Uttar Pradesh (UP)</div>
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col connector">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="city-box">Lucknow (Centre)</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Prayagraj (South)</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Bareilly (West)</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Agra (West)</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Noida (NCR)</div>
                    </div>
                </div>

                <!-- Row for Punjab -->
                <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Punjab (PB)</div>
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col connector">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="city-box">Chandigarh</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Jalandhar</div>
                    </div>
                    <div class="col">
                        <div class="city-box">Amritsar</div>
                    </div>
                </div>

                <!-- Row for Himachal Pradesh -->
                <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Himachal Pradesh (HP)</div>
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col connector">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="city-box">Shimla</div>
                    </div>
                </div>

                <!-- Row for Uttarakhand -->
                
                
                 <!-- Row for Himachal Pradesh -->
                <div class="row text-center">
                    <div class="col-12">
                        <div class="state-box">Delhi (NCR)</div>
                    </div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col connector">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="row text-center mb-4">
                 
                    <div class="col">
                        <div class="city-box">Dwarka</div>
                    </div>
                  
                </div>


                <!-- Row for Uttarakhand -->
                
            </div>
        </div>


    </div>
</section>

<!--sponser-->
<section class="testimonials py-5 bg-light">

    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Sponser</h2>
                <div class="dots text-center">
                    <div class="dot1"> </div>
                    <div class="dot1"></div>
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>

            </div>
            <div class="col-md-12 py-4">
                <div class="spnsoer2-carousel owl-carousel owl-theme ">
                    <div class="item  p-3">
                        <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859312/1_ajk5xw.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859553/2_q9vre2.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859662/3_gkagq8.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859757/4s_rqkhlg.png" class="mx-auto d-block " alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859819/5s_jritge.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                      <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859841/6_sdtguo.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>


                     <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859894/7_afl6f4.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    
                    
                     <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753859944/8_rzoua2.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
<!--                     
                     <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753860005/9_nxad6a.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div> -->






                </div>

            </div>
        </div>
    </div>
 
</section>


<!--sponer-->

<!-- end loaciton where we play match -->

 <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h2> Collages</h2>
                <div class="dots text-center">
                    <div class="dot1"> </div>
                    <div class="dot1"></div>
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>

            </div>
            <div class="col-md-12 py-4">
                <div class="sponser-carousel owl-carousel owl-theme section animate-on-scroll slide-left">
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969791/sponser1_noxpbz.jpg" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969804/sponser6_q8uryp.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969802/sponser5_kp8arw.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969798/sponser4_f1x3n1.png" class="mx-auto d-block mt-4" alt="banner-image">
                        </div>

                    </div>
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969797/sponser3_fzuxaf.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item">
                        <div class="circel">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969793/sponser2_qonpx0.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>




<!-- testimonial start -->
<!-- Testimonial Section -->
<section class="testimonials py-5 bg-light">

    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Teams</h2>
                <div class="dots text-center">
                    <div class="dot1"> </div>
                    <div class="dot1"></div>
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>

            </div>
            <div class="col-md-12 py-4">
                <div class="spnsoer2-carousel owl-carousel owl-theme ">
                    <div class="item  p-3">
                        <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969852/up_xtf9r3.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969676/jk_fgsdlh.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969845/uk_zsiqoh.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753861722/delhi_kilwi5.png" class="mx-auto d-block " alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969656/guj_o9mip0.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    <div class="item  p-3">
                      <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969662/hr_lxtpec.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>


                     <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969659/himachal_x0yseb.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>



                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969700/mp_ntpxhl.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>


                    <div class="item  p-3">
                       <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969772/punjab_v5xomw.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>
                    
                    
                    <div class="item  p-3">
                        <div class="circel-2">
                            <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969788/rj_ug1efv.png" class="mx-auto d-block" alt="banner-image">
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>
    <div class="container py-lg-5">
        <!-- Heading -->
        <div class="row">
            <div class="col-lg-8">
                <h6 class="text-primary">Testimonials-</h6>
                <h2>Trusted by Thousands of Players <br> and Coaches</h2>


            </div>
            <div class="col-lg-4 d-flex">
                <h1 class="display-4 four-nine">4.9</h1>
                <div class="rating-div">

                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>
                    <a href="review.php" class="see-all mt-2 d-block">SEE ALL</a>
                </div>

            </div>
        </div>



        <!-- Testimonials -->
        <div class="row py-0 py-lg-5">
            <div class="col-md-12">

                <div class="review-carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="card testimonial-card p-4 shadow-sm">
                            <div class="stars mb-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>"Champion Cricket League has completely transformed my cricket journey! The exposure
                                and
                                competition I experienced here pushed me to improve my game significantly. Today,
                                I'm representing my district team, and I owe it all to Champion Cricket League!"</p>
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-md-2 name-review-icon">
                                        <i class="fa-solid fa-r"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="name-review">
                                            <h6>Rahul Sharma</h6>
                                            <!-- <small class="text-muted">State-level Cricketer</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="card testimonial-card p-4 shadow-sm">
                            <div class="stars mb-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>"The level of organization and professionalism at Champion Cricket League is
                                unmatched. The
                                platform not only helped me gain valuable match experience but also connected me
                                with some incredible coaches. It's been a crucial stepping stone in my journey
                                toward state-level cricket."</p>
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-md-2 name-review-icon">
                                        <i class="fa-solid fa-p"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="name-review">
                                            <h6>Priyal Mehta</h6>
                                            <!-- <small class="text-muted">Parent of Champion Cricket League Player</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card testimonial-card p-4 shadow-sm">
                            <div class="stars mb-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>"Being a part of Champion Cricket League has been nothing short of amazing. The
                                opportunity to
                                showcase my skills against top players from different regions has boosted my
                                confidence. Now, I'm on my way to playing for the university team, and Champion
                                Cricket League
                                played a massive role in this achievement."</p>
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-md-2 name-review-icon">
                                        <i class="fa-solid fa-m"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="name-review">
                                            <h6>Mohit</h6>
                                            <!-- <small class="text-muted">State-level Cricketer</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card testimonial-card p-4 shadow-sm">
                            <div class="stars mb-3">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>"Thanks to Champion Cricket League, I’ve grown both as a player and as a team leader.
                                The
                                competitive matches, along with guidance from experts, have honed my skills
                                tremendously. I am now playing at the zonal level, and it’s all because of the
                                platform Champion Cricket League provided!"</p>
                            <div class="container-fluid mt-4">
                                <div class="row">
                                    <div class="col-md-2 name-review-icon">
                                        <i class="fa-solid fa-a"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="name-review">
                                            <h6>Amit Patel</h6>
                                            <!-- <small class="text-muted">Champion Cricket League Coach</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 1 -->



        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const animatedElements = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target); // Stop observing once it becomes visible
                }
            });
        });

        animatedElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

<script>
    let slideIndex = 1;

    function openLightbox() {
        document.getElementById("lightbox").style.display = "block";
        showSlide(slideIndex);
    }

    function closeLightbox() {
        document.getElementById("lightbox").style.display = "none";
    }

    function changeSlide(n) {
        showSlide(slideIndex += n);
    }

    function setCurrentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        const slides = document.getElementsByClassName("lightbox-slide");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (let slide of slides) {
            slide.style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

</script>

<?php include 'footer.php'; ?>