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

        <title>We-Connect</title>
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

        <header class="pxp-header fixed-top">
            <div class="pxp-container">
                <div class="pxp-header-container">
                    <div class="pxp-logo">
                        <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                    </div>
                    <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                        <ul>
                            <li class="dropdown">
                                <a href="worker_index.php">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="joblist.php" >Find Jobs</a>
                            </li>
                            <li class="dropdown">
                                <a href="WorkerDashboard-profile.php">Dashboard</a>
                            </li>
                            <!-- <li class="dropdown">
                                <a href="subscription_worker.php">Subscription</a>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Candidates</a>
                            </li> -->
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-list-1.html">Articles Cards</a></li>
                                    <li><a class="dropdown-item" href="blog-list-2.html">Articles List</a></li>
                                    <li><a class="dropdown-item" href="blog-list-3.html">Articles Boxed</a></li>
                                    <li><a class="dropdown-item" href="single-blog-post.html">Single Article</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
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
                    <nav class="pxp-user-nav d-none d-sm-flex">
                        <!-- <a href="company-dashboard-new-job.html" class="btn rounded-pill pxp-nav-btn">Post a Job</a> -->
                        <div class="dropdown pxp-user-nav-dropdown">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(../images/company-logo-1.png);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="WorkerDashboard-profile.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="WorkerDashboard-profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logoutController.php">Logout</a></li>
                        </ul>
                    </div>
                        <!-- <a class="btn rounded-pill pxp-user-nav-trigger" data-bs-toggle="modal" href="../auth/logoutController.php" role="button"><img class="log-out-btn" src="./images/login_icons/power-off-ico.svg" alt="" /> Logout</a> -->
                    </nav>
                </div>
            </div>
        </header>

        <section class="pxp-hero vh-100" style="background-color: var(--pxpMainColorLight);">
            <div class="pxp-hero-caption">
                <div class="pxp-container">
                    <div class="row pxp-pl-80 align-items-center justify-content-between">
                        <div class="col-12 col-xl-6 col-xxl-5">
                            <h1>Welcome <span style="color: var(--pxpMainColor);">Candidate,</span><br>Find the perfect<br><span style="color: var(--pxpMainColor);">job</span> for you</h1>
                            <div class="pxp-hero-subtitle mt-3 mt-lg-4">Search your career opportunity through <strong>12,800</strong> jobs</div>
                            <div class="pxp-hero-form pxp-hero-form-round mt-3 mt-lg-4">
                                <form class="row gx-3 align-items-center" action="https://pixelprime.co/themes/jobster/jobs-list-1.html">
                                    <div class="col-12 col-sm">
                                        <div class="mb-3 mb-sm-0">
                                            <input type="text" class="form-control" placeholder="Job Title or Keyword">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm pxp-has-left-border">
                                        <div class="mb-3 mb-sm-0">
                                            <input type="text" class="form-control" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-auto">
                                        <button><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <div class="pxp-hero-searches-container">
                                <div class="pxp-hero-searches-label">Popular Searches</div>
                                <div class="pxp-hero-searches">
                                    <div class="pxp-hero-searches-items">
                                    <a href="joblist.php">Carpenter</a>
                                        <a href="joblist.php">Electrician</a>
                                        <a href="joblist.php">Cleaner</a>
                                        <a href="joblist.php">Plumber</a>
                                        <a href="joblist.php">Cook</a>
                                        <a href="joblist.php">Driver</a>
                                        <a href="joblist.php">Farm Workers</a>
                                        <a href="joblist.php">Mechanic</a>
                                        <a href="joblist.php">Painter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-xl-block col-xl-5 position-relative">
                            <div class="pxp-hero-cards-container pxp-animate-cards pxp-mouse-move" data-speed="160">
                                <div class="pxp-hero-card pxp-cover pxp-cover-top" style="background-image: url(../images/hero-bg-1.jpg);"></div>
                                <div class="pxp-hero-card-dark"></div>
                                <div class="pxp-hero-card-light"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="pxp-hero-right-bg-card pxp-has-animation"></div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <h2 class="pxp-section-h2 text-center">Search by Category</h2>
                <p class="pxp-text-light text-center">Search your career opportunity with our categories</p>
    
                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-pie-chart"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Carpenter</div>
                            <div class="pxp-categories-card-1-subtitle">139 open positions</div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-bullhorn"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Electrician</div>
                            <div class="pxp-categories-card-1-subtitle">366 open positions</div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-address-card-o"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Cleaner</div>
                            <div class="pxp-categories-card-1-subtitle">435 open positions</div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-calendar-o"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Plumber</div>
                            <div class="pxp-categories-card-1-subtitle">324 open positions</div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-comments-o"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Cook</div>
                            <div class="pxp-categories-card-1-subtitle">39 open positions</div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xxl-2 pxp-categories-card-1-container">
                        <a href="joblist.php" class="pxp-categories-card-1">
                            <div class="pxp-categories-card-1-icon-container">
                                <div class="pxp-categories-card-1-icon">
                                    <span class="fa fa-terminal"></span>
                                </div>
                            </div>
                            <div class="pxp-categories-card-1-title">Driver</div>
                            <div class="pxp-categories-card-1-subtitle">439 open positions</div>
                        </a>
                    </div>
                </div>

                <div class="mt-4 mt-md-5 text-center pxp-animate-in pxp-animate-in-top">
                    <a href="joblist.php" class="btn rounded-pill pxp-section-cta">All Categories<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>


        <footer class="pxp-main-footer mt-100">
            <div class="pxp-main-footer-top pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
                <div class="pxp-container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4">
                            <div class="pxp-footer-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                            </div>
                            <div class="pxp-footer-section mt-3 mt-md-4">
                                <h3>Call us</h3>
                                <div class="pxp-footer-phone">+91 9061673186</div>
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
        <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"2be4d39bc57799e2359e3308fc052543f","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
    </body>

</html>

<?php
}
?>
