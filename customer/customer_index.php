<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {
    
?>




<!doctype html>
<html lang="en" class="pxp-root">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/style.css">

        <title>We-Connect - Home </title>
    </head>
    <body>
        <div class="pxp-preloader"><span>Loading...</span></div>

        <header class="pxp-header fixed-top pxp-bigger">
            <div class="pxp-container">
                <div class="pxp-header-container">
                    <div class="pxp-logo">
                        <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                    </div>
                    <div class="pxp-header-right">
                        <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                            <ul>
                                <li class="dropdown">
                                    <a href="customer_index.php">Home</a>
                                </li>
                                <li class="dropdown">
                                <a href="worker_list.php">Find workers</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a>Plans</a>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <a>Contact us</a>
                                </li> -->
                                <li class="dropdown">
                                    <a href="CustomerDashboard-Profile.php">Dashboard</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-list-1.html">Articles Cards</a></li>
                                        <li><a class="dropdown-item" href="blog-list-2.html">Articles List</a></li>
                                        <li><a class="dropdown-item" href="blog-list-3.html">Articles Boxed</a></li>
                                        <li><a class="dropdown-item" href="single-blog-post.html">Single Article</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                                        <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                        <li><a class="dropdown-item" href="faqs.html">FAQs</a></li>
                                        <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                                        <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
                                        <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
                        <nav class="pxp-user-nav pxp-on-light d-none d-sm-flex">
                            <a href="CustomerDashboard-new_job.php" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                            <div class="dropdown pxp-user-nav-dropdown">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(../images/company-logo-1.png);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logoutController.php">Logout</a></li>
                        </ul>
                    </div>
                            <!-- <a class="btn rounded-pill pxp-user-nav-trigger" data-bs-toggle="modal" href="../auth/logoutController.php" role="button"><img class="log-out-btn" src="../images/login_icons/power-off-ico.svg" alt="" /> Logout</a> -->
                            <!-- <a class="btn rounded-pill pxp-user-nav-trigger" data-bs-toggle="modal" href="#pxp-signin-modal" role="button">Sign in</a> -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <section class="pxp-hero pxp-hero-boxed">
            <div class="pxp-container">
                <div class="pxp-hero-boxed-content" style="background-color: var(--pxpMainColorLight);">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-xl-6 col-xxl-5">
                            <h1>Find the perfect<br><span style="color: var(--pxpMainColor);">job</span> for you</h1>
                            <div class="pxp-hero-subtitle mt-3 mt-lg-4">Search your career opportunity through <strong>12,800</strong> jobs</div>

                            <div class="pxp-hero-form pxp-hero-form-round pxp-bigger mt-3 mt-lg-4">
                                <form class="row gx-3 align-items-center" action="https://pixelprime.co/themes/jobster/jobs-list-1.html">
                                    <div class="col-12 col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="pxpHeroFormKeyword" placeholder="Job title or keyword" value="Job title or keyword">
                                            <label for="pxpHeroFormKeyword">What</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md pxp-has-left-border">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="pxpHeroFormLocation" placeholder="Job location" value="Job location">
                                            <label for="pxpHeroFormLocation">Where</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-auto">
                                        <button>Find Jobs</button>
                                    </div>
                                </form>
                            </div>

                            <div class="pxp-hero-searches-container">
                                <div class="pxp-hero-searches-label">Popular Searches</div>
                                <div class="pxp-hero-searches">
                                    <div class="pxp-hero-searches-items">
                                    <a href="joblist.php">Carpenter</a>
                                        <a >Electrician</a>
                                        <a >Cleaner</a>
                                        <a >Plumber</a>
                                        <a >Cook</a>
                                        <a >Driver</a>
                                        <a >Farm Workers</a>
                                        <a >Mechanic</a>
                                        <a >Painter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-xl-block col-xl-4 col-xxl-5 position-relative">
                            <div class="pxp-hero-boxed-circulars pxp-animate-circles-bounce">
                                <div class="pxp-hero-boxed-circular-outer">
                                    <div class="pxp-hero-boxed-circular-outer-1"></div>
                                    <div class="pxp-hero-boxed-circular-outer-2"></div>
                                    <div class="pxp-hero-boxed-circular-outer-3"></div>
                                </div>
                                <div class="pxp-hero-boxed-circular-middle">
                                    <div class="pxp-hero-boxed-circular-middle-1"></div>
                                    <div class="pxp-hero-boxed-circular-middle-2"></div>
                                    <div class="pxp-hero-boxed-circular-middle-3"></div>
                                </div>
                                <div class="pxp-hero-boxed-circular-center"></div>
                            </div>

                            <div class="pxp-hero-boxed-icon-circles">
                                <div class="pxp-hero-boxed-icon-circle-1 pxp-animate-icon-circle-bounce">
                                    <img src="../images/paper-icon.png" alt="Paper icon">
                                </div>
                                <div class="pxp-hero-boxed-icon-circle-2 pxp-animate-icon-circle-bounce">
                                    <img src="../images/folder-icon.png" alt="Folder icon">
                                </div>
                            </div>

                            <div class="pxp-hero-boxed-info-cards">
                                <div class="pxp-hero-boxed-info-card-big pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-card-big-content">
                                        <div class="pxp-hero-boxed-info-card-big-icon">
                                            <img src="../images/service-2-icon.png" alt="Job Fit Scoring">
                                        </div>
                                        <div class="pxp-hero-boxed-info-card-big-title">Job Fit Scoring</div>
                                        <div class="pxp-hero-boxed-info-card-big-text pxp-text-light">Search your career opportunity through 12,800 jobs</div>
                                    </div>
                                </div>
                                <div class="pxp-hero-boxed-info-card-small pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-card-small-content">
                                        <div class="pxp-hero-boxed-info-card-small-icon">
                                            <img src="../images/service-1-icon.png" alt="Full-service recruiting">
                                        </div>
                                        <div class="pxp-hero-boxed-info-card-small-title">Full-service recruiting</div>
                                    </div>
                                </div>
                                <div class="pxp-hero-boxed-info-list-container pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-list">
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">286<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Electrician</div>
                                        </div>
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">154<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Drivers</div>
                                        </div>
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">319<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Mechanic</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- <section class="mt-100 pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Featured Candidates</h2>
                <p class="pxp-text-light">We can help you find and engage with candidates</p>

                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-shadow text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(../images/avatar-1.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Derek Cotner</div>
                                <div class="pxp-candiadates-card-1-title">UI Designer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>London, UK</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-shadow text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(../images/avatar-2.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Kenneth Spiers</div>
                                <div class="pxp-candiadates-card-1-title">Software Developer</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>San Francisco, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-shadow text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(../images/avatar-3.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Rebecca Eason</div>
                                <div class="pxp-candiadates-card-1-title">Marketing Expert</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Los Angeles, CA</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-shadow text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(../images/avatar-4.jpg);"></div>
                                <div class="pxp-candiadates-card-1-name">Susanne Weil</div>
                                <div class="pxp-candiadates-card-1-title">Architect</div>
                                <div class="pxp-candiadates-card-1-location"><span class="fa fa-globe"></span>Paris, France</div>
                            </div>
                            <div class="pxp-candiadates-card-1-bottom">
                                <div class="pxp-candiadates-card-1-cta">
                                    <a href="single-candidate-1.html">View profile<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <a href="candidates-list-1.html" class="btn rounded-pill pxp-section-cta">All Candidates<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section> -->


        <footer class="pxp-main-footer mt-100">
            <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
                <div class="pxp-container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                            <div class="pxp-footer-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>Connect</a>
                            </div>
                            <div class="pxp-footer-section mt-3 mt-md-4">
                                <h3>Call us</h3>
                                <div class="pxp-footer-phone">(123) 456-7890</div>
                            </div>
                            <div class="mt-3 mt-md-4 pxp-footer-section">
                                <div class="pxp-footer-text">
                                Amal Jyothi College<br>
                                    Kottayam<br>
                                    office@weconnect.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
                <div class="pxp-container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-auto">
                            <div class="pxp-footer-copyright pxp-text-light">© 2022 We-Connect. All Right Reserved.</div>
                        </div>
                        <div class="col-lg-auto">
                            <div class="pxp-footer-social mt-3 mt-lg-0">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/nav.js"></script>
        <script src="../js/main.js"></script>
    </body>

</html>

<?php
}
?>