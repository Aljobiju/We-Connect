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

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css">
        <link rel="stylesheet" href="../css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/style.css">

        <title>We-Connect - Pricing plans</title>
    </head>
    <body>
         <!-- Google translate start -->
<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                            <script >
                                function loadGoogleTranslate(){
                                   new google.translate.TranslateElement("google_translate_element");
                                }
                            </script>
     <!-- Google translate end -->
        <div class="pxp-preloader"><span>Loading...</span></div>

        <header class="pxp-header fixed-top pxp-no-bg">
            <div class="pxp-container">
                <div class="pxp-header-container">
                    <div class="pxp-logo-nav-container">
                        <div class="pxp-logo">
                            <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                        </div>
                        <div class="pxp-nav-trigger navbar d-xl-none flex-fill">
                            <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                                <div class="pxp-line-1"></div>
                                <div class="pxp-line-2"></div>
                                <div class="pxp-line-3"></div>
                            </a>
                        </div>
                        <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                            <ul>
                                <li class="dropdown">
                                    <a href="customer_index.php">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="worker_list.php" >Find Workers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="CustomerDashboard-Profile.php" >Dashboard</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#">Contact us</a>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Blog</a> -->
                                    <!-- <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-list-1.html">Articles Cards</a></li>
                                        <li><a class="dropdown-item" href="blog-list-2.html">Articles List</a></li>
                                        <li><a class="dropdown-item" href="blog-list-3.html">Articles Boxed</a></li>
                                        <li><a class="dropdown-item" href="single-blog-post.html">Single Article</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <nav class="pxp-user-nav pxp-on-light">
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
                    </nav>
                </div>
            </div>
        </header>

        <section class="mt-100 pxp-no-hero">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Price Plans</h2>
                <p class="pxp-text-light">Choose the plan that suits you best</p>

                <div class="mt-4 mt-md-5">
                    <div class="btn-group pxp-price-plans-switcher" role="group" aria-label="Price plans switcher">
                        <input type="radio" class="btn-check" name="pxp-price-plans-switcher" id="pxp-price-plan-monthly" data-period="month" checked>
                        <label class="btn btn-outline-primary" for="pxp-price-plan-monthly">Monthly</label>

                        <!-- <input type="radio" class="btn-check" name="pxp-price-plans-switcher" id="pxp-price-plan-nnnual" data-period="year">
                        <label class="btn btn-outline-primary" for="pxp-price-plan-nnnual">Annual</label> -->
                    </div>
                </div>

                <div class="row mt-3 mt-md-4 pxp-animate-in pxp-animate-in-top">
                    <!-- <div class="col-md-6 col-xl-4 col-xxl-3 pxp-plans-card-1-container">
                        <div class="pxp-plans-card-1">
                            <div class="pxp-plans-card-1-top">
                                <div class="pxp-plans-card-1-title">Basic</div>
                                <div class="pxp-plans-card-1-price">
                                    <div class="pxp-plans-price-monthly">
                                    ₹199<span class="pxp-period">/month</span>
                                    </div>
                                    <div class="pxp-plans-price-annual">
                                    ₹189<span class="pxp-period">/year</span>
                                    </div>
                                </div>
                                <div class="pxp-plans-card-1-list">
                                    <ul class="list-unstyled">
                                        <li><img src="images/check.svg" alt="">1 job posting</li>
                                        <li><img src="images/check.svg" alt="">0 featured job</li>
                                        <li><img src="images/check.svg" alt="">Job displayed for 20 days</li>
                                        <li><img src="images/check.svg" alt="">Premium Support 24/7</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pxp-plans-card-1-bottom">
                                <div class="pxp-plans-card-1-cta">
                                    <a href="#" class="btn rounded-pill pxp-card-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-plans-card-1-container">
                        <div class="pxp-plans-card-1">
                            <div class="pxp-plans-card-1-top">
                                <div class="pxp-plans-card-1-title">Standard</div>
                                <div class="pxp-plans-card-1-price">
                                    <div class="pxp-plans-price-monthly">
                                    ₹299<span class="pxp-period">/month</span>
                                    </div>
                                    <!-- <div class="pxp-plans-price-annual">
                                    ₹289<span class="pxp-period">/year</span>
                                    </div> -->
                                </div>
                                <div class="pxp-plans-card-1-list">
                                    <ul class="list-unstyled">
                                        <li><img src="images/check.svg" alt="">5 job posting</li>
                                        <li><img src="images/check.svg" alt="">1 featured job</li>
                                        <li><img src="images/check.svg" alt="">Job displayed for 30 days</li>
                                        <li><img src="images/check.svg" alt="">Premium Support 24/7</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pxp-plans-card-1-bottom">
                                <div class="pxp-plans-card-1-cta">
                                    <a href="../razorpay.php" class="btn rounded-pill pxp-card-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-xl-4 col-xxl-3 pxp-plans-card-1-container">
                        <div class="pxp-plans-card-1 pxp-is-featured">
                            <div class="pxp-plans-card-1-top">
                                <div class="pxp-plans-card-1-featured-label">Recommended</div>
                                <div class="pxp-plans-card-1-title">Professional</div>
                                <div class="pxp-plans-card-1-price">
                                    <div class="pxp-plans-price-monthly">
                                    ₹499<span class="pxp-period">/month</span>
                                    </div>
                                    <div class="pxp-plans-price-annual">
                                    ₹489<span class="pxp-period">/year</span>
                                    </div>
                                </div>
                                <div class="pxp-plans-card-1-list">
                                    <ul class="list-unstyled">
                                        <li><img src="images/check-light.svg" alt="">1 job posting</li>
                                        <li><img src="images/check-light.svg" alt="">0 featured job</li>
                                        <li><img src="images/check-light.svg" alt="">Job displayed for 20 days</li>
                                        <li><img src="images/check-light.svg" alt="">Premium Support 24/7</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pxp-plans-card-1-bottom">
                                <div class="pxp-plans-card-1-cta">
                                    <a href="#" class="btn rounded-pill pxp-card-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-xl-4 col-xxl-3 pxp-plans-card-1-container">
                        <div class="pxp-plans-card-1">
                            <div class="pxp-plans-card-1-top">
                                <div class="pxp-plans-card-1-title">Extended</div>
                                <div class="pxp-plans-card-1-price">
                                    <div class="pxp-plans-price-monthly">
                                        $799<span class="pxp-period">/month</span>
                                    </div>
                                    <div class="pxp-plans-price-annual">
                                        $789<span class="pxp-period">/year</span>
                                    </div>
                                </div>
                                <div class="pxp-plans-card-1-list">
                                    <ul class="list-unstyled">
                                        <li><img src="images/check.svg" alt="">1 job posting</li>
                                        <li><img src="images/check.svg" alt="">0 featured job</li>
                                        <li><img src="images/check.svg" alt="">Job displayed for 20 days</li>
                                        <li><img src="images/check.svg" alt="">Premium Support 24/7</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pxp-plans-card-1-bottom">
                                <div class="pxp-plans-card-1-cta">
                                    <a href="#" class="btn rounded-pill pxp-card-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <footer class="pxp-main-footer mt-100">
            <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
                <div class="pxp-container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                            <div class="pxp-footer-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We-</span>Connect</a>
                            </div>
                            <div class="pxp-footer-section mt-3 mt-md-4">
                                <h3>Call us</h3>
                                <div class="pxp-footer-phone">(123) 456-7890</div>
                            </div>
                            <div class="mt-3 mt-md-4 pxp-footer-section">
                                <div class="pxp-footer-text">
                                    90 Fifth Avenue, 3rd Floor<br>
                                    San Francisco, CA 1980<br>
                                    office@weconnect.com
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-xl-7 col-xxl-8">
                            <div class="row">
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>For Candidates</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="jobs-list-1.html">Find Jobs</a></li>
                                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                            <li><a href="candidate-dashboard-applications.html">My Applications</a></li>
                                            <li><a href="candidate-dashboard-fav-jobs.html">Favourite Jobs</a></li>
                                            <li><a href="candidate-dashboard-inbox.html">My inbox</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>For Employers</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="candidates-list-1.html">Find Candidates</a></li>
                                            <li><a href="company-dashboard.html">Company Dashboard</a></li>
                                            <li><a href="company-dashboard-new-job.html">Post a Job</a></li>
                                            <li><a href="company-dashboard-jobs.html">Manage Jobs</a></li>
                                            <li><a href="company-dashboard-candidates.html">Candidates</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>About Us</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="blog-list-1.html">Blog</a></li>
                                            <li><a href="blog-list-1.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 col-xxl-3 mb-4">
                                    <div class="pxp-footer-section">
                                        <h3>Helpful Resources</h3>
                                        <ul class="pxp-footer-list">
                                            <li><a href="faqs.html">FAQs</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="sign-up.html">Sign Up</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
                <div class="pxp-container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-auto">
                            <div class="pxp-footer-copyright pxp-text-light">© 2021 We-Connect. All Right Reserved.</div>
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
            </div> -->
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