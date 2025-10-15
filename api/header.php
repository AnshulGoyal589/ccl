<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champion Cricket League </title>

    <link rel="icon" href="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760544651/38e0ef61-bc38-4686-9644-15c8ad7316a3_p9kes0.jpg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="/assets/responsive.css">

    <!-- fontawsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

</head>

<body>

    <div class="fixed-icon">
        <a href="https://wa.me/917827434237"><img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760543667/1022px-WhatsApp.svg_f6mt0v.png" alt="icon"></a>
        <br>
        <a href="tel:01169311383"><img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760543704/0be285c89368fd2d7b0499db071963ef_hyxled.svg" alt="icon"></a>
    </div>
    
    <!-- Navbar -->
    <header class="top-header text-white">
        <div class="container-fluid ">
            <div class="row align-items-center">
                <!-- Social Media Links -->
                <div class="col-lg-3 col-8">
                    <div class="icon-div">


                        <a href="https://x.com/CCL_IND"> <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/champion-cricket-league"><i
                                class="fa-brands fa-linkedin"></i></a>

                        <a href="https://www.instagram.com/champion_cricket_league/"><i
                                class="fa-brands fa-instagram"></i></a>
                                
                         <a href="https://www.facebook.com/share/ZcPYAj9NXQmknsGj/?mibextid=LQQJ4d"><i class="fa-brands fa-facebook-f"></i></a>

                        <a href="https://youtube.com/@champion_cricket_league_ccl?si=IrIeZfoINayHkbXN"><i class="fa-brands fa-youtube"></i></a>

                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 d-flex align-items-center  gap-3 py-2 " id="mobile-none">
                    <!-- <span class="ms-3">Last Date to Register: 6th September 2025 | Fees Increasing Soon - Register Now</span> -->
                    <span class="ms-3">Registrations Open | Fees Increasing Soon - Register Now</span>
                </div>
                <!-- Language Selector and Register Button -->
                <div class="col-lg-1 col-md-2 col-sm-12 col-4 user-section gap-3">

                    <!-- login page is created -->
                    <a href="registration.php"> <i class="fa-solid fa-user"></i></a>

                </div>
            </div>
        </div>
    </header>

    <!-- Main Navbar -->
    <nav class="navbar  navbar-expand-lg navbar-black bg-black" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="https://res.cloudinary.com/dmykc7bgs/image/upload/v1760544651/38e0ef61-bc38-4686-9644-15c8ad7316a3_p9kes0.jpg" alt="Logo" class="logo me-2">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <span class="close-btn mobile-view" onclick="toggleNavbar()">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="about.php">What is CCL</a>
                            <!--<a class="dropdown-item" href="#">Organisers </a>-->
                            <a class="dropdown-item" href="team.php">Team </a>
                            <a class="dropdown-item" href="contact.php">Contact Us </a>


                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Policies
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="registration-policies.php">Registration Policy</a>
                            <a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a>
                            <a class="dropdown-item" href="refund-policy.php">Refund Policy</a>
                            <a class="dropdown-item" href="terms-conditions.php">Terms & Conditions </a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Highlights
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.youtube.com/@CHAMPION_CRICKET_LEAGUE_CCL/streams">Live Matches </a>
                            <a class="dropdown-item" href="gallery.php">Gallery</a>
                            <a class="dropdown-item" href="videos.php">Videos </a>
                            <a class="dropdown-item" href="review.php">Reviews </a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Process
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="selection-process.php">Selection Process</a>
                            <a class="dropdown-item" href="trials.php">Trials </a>
                            <a class="dropdown-item" href="state-league.php">State League </a>
                            <a class="dropdown-item" href="mandatory-documents.php">Mandatory Documents</a>


                        </div>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="assets/images/Cosco.pdf" target="_blank">Tennis</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="portfolio.php" target="_blank">PhysicCare</a></li>

                    <!--<li class="nav-item"><a class="nav-link" target="_blank" href="https://store.championcricketleague.com">Store</a></li>-->
                    <!--<li class="nav-item"><a class="nav-link" target="_blank" href="https://cricheroes.in/tournament/1207656/Delhi-NCR-Cricket-Selection-Trials">Cricheroes</a></li>-->
                    <!-- page is already created -->
                    <!-- <li class="nav-item"><a class="nav-link" href="pay-fee.php">Pay Fee</a></li> -->

                </ul>
            </div>

            <!-- Replace the existing Register Now button with this dropdown -->
            <div class="dropdown d-inline-block">
                <button class="btn btn-primary dropdown-toggle register-btn" type="button" id="registerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Register Now
                </button>
                <ul class="dropdown-menu" aria-labelledby="registerDropdown">
                    <li><a class="dropdown-item" href="registration.php">Leather</a></li>
                    <li><a class="dropdown-item" href="registration2.php">Tennis</a></li>
                </ul>
            </div>
        </div>
    </nav>