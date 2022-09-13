<?php
include('./config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ./login.php");
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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

        <title>We-Connect - Home v4</title>
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
                                    <a>Find Workers</a>
                                </li>
                                <li class="dropdown">
                                    <a>Plans</a>
                                </li>
                                <li class="dropdown">
                                    <a>Contact us</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
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
                        <na v class="pxp-user-nav pxp-on-light d-none d-sm-flex">
                            <a href="CustomerDashboard-new_job.php" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                            <a class="btn rounded-pill pxp-user-nav-trigger" data-bs-toggle="modal" href="./auth/logoutController.php" role="button"><img class="log-out-btn" src="./images/login_icons/power-off-ico.svg" alt="" /> Logout</a>
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
                                        <a href="jobs-list-1.html">Work from home</a>
                                        <a href="jobs-list-1.html">Part-time</a>
                                        <a href="jobs-list-1.html">Administration</a>
                                        <a href="jobs-list-1.html">Finance</a>
                                        <a href="jobs-list-1.html">Retail</a>
                                        <a href="jobs-list-1.html">IT</a>
                                        <a href="jobs-list-1.html">Engineering</a>
                                        <a href="jobs-list-1.html">Sales</a>
                                        <a href="jobs-list-1.html">Manufacturing</a>
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
                                    <img src="images/paper-icon.png" alt="Paper icon">
                                </div>
                                <div class="pxp-hero-boxed-icon-circle-2 pxp-animate-icon-circle-bounce">
                                    <img src="images/folder-icon.png" alt="Folder icon">
                                </div>
                            </div>

                            <div class="pxp-hero-boxed-info-cards">
                                <div class="pxp-hero-boxed-info-card-big pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-card-big-content">
                                        <div class="pxp-hero-boxed-info-card-big-icon">
                                            <img src="images/service-2-icon.png" alt="Job Fit Scoring">
                                        </div>
                                        <div class="pxp-hero-boxed-info-card-big-title">Job Fit Scoring</div>
                                        <div class="pxp-hero-boxed-info-card-big-text pxp-text-light">Search your career opportunity through 12,800 jobs</div>
                                    </div>
                                </div>
                                <div class="pxp-hero-boxed-info-card-small pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-card-small-content">
                                        <div class="pxp-hero-boxed-info-card-small-icon">
                                            <img src="images/service-1-icon.png" alt="Full-service recruiting">
                                        </div>
                                        <div class="pxp-hero-boxed-info-card-small-title">Full-service recruiting</div>
                                    </div>
                                </div>
                                <div class="pxp-hero-boxed-info-list-container pxp-animate-info-card">
                                    <div class="pxp-hero-boxed-info-list">
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">286<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Business Development</div>
                                        </div>
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">154<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Marketing & Communication</div>
                                        </div>
                                        <div class="pxp-hero-boxed-info-list-item">
                                            <div class="pxp-hero-boxed-info-list-item-number">319<span>job offers</span></div>
                                            <div class="pxp-hero-boxed-info-list-item-description">in Human Resources</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Featured Job Offers</h2>
                <p class="pxp-text-light">Search your career opportunity through 12,800 jobs</p>

                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-bullhorn"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Marketing & Communication</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Senior Editor</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>San Francisco, CA
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Artistre Studio</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-1.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-calendar-o"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Project Management</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Software Engineering Team Leader</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>Los Angeles, CA
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Craftgenics</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-2.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-comments-o"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Customer Service</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Techincal Support Engineer</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>Paris, France
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Illuminate Studio</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-3.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-terminal"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Software Engineering</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Javascript Developer</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>London, UK
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Syspresoft</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-4.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-pie-chart"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Business Development</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Technical Writer</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>London, UK
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Gramware</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-5.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-address-card-o"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Human Resources</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Human Resources Coordinator</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>San Francisco, CA
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Bitbytech</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-6.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-terminal"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Software Engineering</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Fullstack Web Developer</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>New York, NY
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">CoderBotics</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-7.png);"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-jobs-card-1-container">
                        <div class="pxp-jobs-card-1 pxp-has-border">
                            <div class="pxp-jobs-card-1-top">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-1-category">
                                    <div class="pxp-jobs-card-1-category-icon"><span class="fa fa-bullhorn"></span></div>
                                    <div class="pxp-jobs-card-1-category-label">Marketing & Communication</div>
                                </a>
                                <a href="single-job-1.html" class="pxp-jobs-card-1-title">Social Media Expert</a>
                                <div class="pxp-jobs-card-1-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-1-location">
                                        <span class="fa fa-globe"></span>San Francisco, CA
                                    </a>
                                    <div class="pxp-jobs-card-1-type">Full-time</div>
                                </div>
                            </div>
                            <div class="pxp-jobs-card-1-bottom">
                                <div class="pxp-jobs-card-1-bottom-left">
                                    <div class="pxp-jobs-card-1-date pxp-text-light">3 days ago by</div>
                                    <a href="single-company-1.html" class="pxp-jobs-card-1-company">Artistre Studio</a>
                                </div>
                                <a href="single-company-1.html" class="pxp-jobs-card-1-company-logo" style="background-image: url(images/company-logo-1.png);"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <a href="jobs-list-1.html" class="btn rounded-pill pxp-section-cta">All Job Offers<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>

        <section class="mt-100 pt-100 pb-100" style="background-color: var(--pxpMainColorLight);">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Featured Candidates</h2>
                <p class="pxp-text-light">We can help you find and engage with candidates</p>

                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-candiadates-card-1-container">
                        <div class="pxp-candiadates-card-1 pxp-has-shadow text-center">
                            <div class="pxp-candiadates-card-1-top">
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(images/avatar-1.jpg);"></div>
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
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(images/avatar-2.jpg);"></div>
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
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(images/avatar-3.jpg);"></div>
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
                                <div class="pxp-candiadates-card-1-avatar pxp-cover" style="background-image: url(images/avatar-4.jpg);"></div>
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
        </section>

        <section class="pt-100 pb-100" style="background-color: var(--pxpSecondaryColorLight);">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Featured Companies</h2>
                <p class="pxp-text-light">Work for the best companies in the world</p>

                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-shadow">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-1.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Artistre Studio</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-shadow">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-7.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">CoderBotics</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-shadow">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-4.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Syspresoft</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California, it has historically specialized in software for the creation.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">10 jobs</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-companies-card-1-container">
                        <div class="pxp-companies-card-1 pxp-has-shadow">
                            <div class="pxp-companies-card-1-top">
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-logo" style="background-image: url(images/company-logo-3.png);"></a>
                                <a href="single-company-1.html" class="pxp-companies-card-1-company-name">Illuminate Studio</a>
                                <div class="pxp-companies-card-1-company-description pxp-text-light">Is an American multinational computer software company. Incorporated in Delaware and headquartered in San Jose, California.</div>
                            </div>
                            <div class="pxp-companies-card-1-bottom">
                                <a href="jobs-list-1.html" class="pxp-companies-card-1-company-jobs">14 jobs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <a href="companies-list-1.html" class="btn rounded-pill pxp-section-cta">All Companies<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <h2 class="pxp-section-h2">Top Career Advice</h2>
                <p class="pxp-text-light">Browse the latest career advices</p>

                <div class="row mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-posts-card-1-container">
                        <div class="pxp-posts-card-1 pxp-has-border">
                            <div class="pxp-posts-card-1-top">
                                <div class="pxp-posts-card-1-top-bg">
                                    <div class="pxp-posts-card-1-image pxp-cover" style="background-image: url(images/post-card-1.jpg);"></div>
                                    <div class="pxp-posts-card-1-info">
                                        <div class="pxp-posts-card-1-date">August 31, 2021</div>
                                        <a href="blog-list-1.html" class="pxp-posts-card-1-category">Assessments</a>
                                    </div>
                                </div>
                                <div class="pxp-posts-card-1-content">
                                    <a href="single-blog-post.html" class="pxp-posts-card-1-title">10 awesome free career self assessments</a>
                                    <div class="pxp-posts-card-1-summary pxp-text-light">Figuring out what you want to be when you grow up is hard, but a career test can make it easier to find...</div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-1-bottom">
                                <div class="pxp-posts-card-1-cta">
                                    <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-posts-card-1-container">
                        <div class="pxp-posts-card-1 pxp-has-border">
                            <div class="pxp-posts-card-1-top">
                                <div class="pxp-posts-card-1-top-bg">
                                    <div class="pxp-posts-card-1-image pxp-cover" style="background-image: url(images/post-card-2.jpg);"></div>
                                    <div class="pxp-posts-card-1-info">
                                        <div class="pxp-posts-card-1-date">September 5, 2021</div>
                                        <a href="blog-list-1.html" class="pxp-posts-card-1-category">Jobs</a>
                                    </div>
                                </div>
                                <div class="pxp-posts-card-1-content">
                                    <a href="single-blog-post.html" class="pxp-posts-card-1-title">How to start looking for a job</a>
                                    <div class="pxp-posts-card-1-summary pxp-text-light">Your resume is perfect. It's keyword-optimized, industry-specified, full of achievements, backed by data...</div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-1-bottom">
                                <div class="pxp-posts-card-1-cta">
                                    <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-posts-card-1-container">
                        <div class="pxp-posts-card-1 pxp-has-border">
                            <div class="pxp-posts-card-1-top">
                                <div class="pxp-posts-card-1-top-bg">
                                    <div class="pxp-posts-card-1-image pxp-cover" style="background-image: url(images/post-card-3.jpg);"></div>
                                    <div class="pxp-posts-card-1-info">
                                        <div class="pxp-posts-card-1-date">September 10, 2021</div>
                                        <a href="blog-list-1.html" class="pxp-posts-card-1-category">Resume</a>
                                    </div>
                                </div>
                                <div class="pxp-posts-card-1-content">
                                    <a href="single-blog-post.html" class="pxp-posts-card-1-title">Resume samples</a>
                                    <div class="pxp-posts-card-1-summary pxp-text-light">Need help writing a resume? Looking for resume examples for specific industries? You’ll find a variety...</div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-1-bottom">
                                <div class="pxp-posts-card-1-cta">
                                    <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4 col-xxl-3 pxp-posts-card-1-container">
                        <div class="pxp-posts-card-1 pxp-has-border">
                            <div class="pxp-posts-card-1-top">
                                <div class="pxp-posts-card-1-top-bg">
                                    <div class="pxp-posts-card-1-image pxp-cover" style="background-image: url(images/post-card-4.jpg);"></div>
                                    <div class="pxp-posts-card-1-info">
                                        <div class="pxp-posts-card-1-date">September 15, 2021</div>
                                        <a href="blog-list-1.html" class="pxp-posts-card-1-category">Interview</a>
                                    </div>
                                </div>
                                <div class="pxp-posts-card-1-content">
                                    <a href="single-blog-post.html" class="pxp-posts-card-1-title">100 top interview questions - be prepared</a>
                                    <div class="pxp-posts-card-1-summary pxp-text-light">While there are as many different possible interview questions as there are interviewers, it always helps...</div>
                                </div>
                            </div>
                            <div class="pxp-posts-card-1-bottom">
                                <div class="pxp-posts-card-1-cta">
                                    <a href="single-blog-post.html">Read more<span class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mt-md-5 pxp-animate-in pxp-animate-in-top">
                    <a href="blog-list-1.html" class="btn rounded-pill pxp-section-cta">Read All Stories<span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </section>

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
                                    90 Fifth Avenue, 3rd Floor<br>
                                    San Francisco, CA 1980<br>
                                    office@jobster.com
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xxl-8">
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
                                            <li><a href="CustomerDashboard-new_job.php">Post a Job</a></li>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
                <div class="pxp-container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-auto">
                            <div class="pxp-footer-copyright pxp-text-light">© 2021 Jobster. All Right Reserved.</div>
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

        <div class="modal fade pxp-user-modal" id="pxp-signin-modal" aria-hidden="true" aria-labelledby="signinModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pxp-user-modal-fig text-center">
                            <img src="images/signin-fig.png" alt="Sign in">
                        </div>
                        <h5 class="modal-title text-center mt-4" id="signinModal">Welcome back!</h5>
                        <form class="mt-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="pxp-signin-email" placeholder="Email address">
                                <label for="pxp-signin-email">Email address</label>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="pxp-signin-password" placeholder="Password">
                                <label for="pxp-signin-password">Password</label>
                                <span class="fa fa-lock"></span>
                            </div>
                            <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                            <div class="mt-4 text-center pxp-modal-small">
                                <a href="#" class="pxp-modal-link">Forgot password</a>
                            </div>
                            <div class="mt-4 text-center pxp-modal-small">
                                New to Jobster? <a role="button" class="" data-bs-target="#pxp-signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade pxp-user-modal" id="pxp-signup-modal" aria-hidden="true" aria-labelledby="signupModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="pxp-user-modal-fig text-center">
                            <img src="images/signup-fig.png" alt="Sign up">
                        </div>
                        <h5 class="modal-title text-center mt-4" id="signupModal">Create an account</h5>
                        <form class="mt-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="pxp-signup-email" placeholder="Email address">
                                <label for="pxp-signup-email">Email address</label>
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="pxp-signup-password" placeholder="Create password">
                                <label for="pxp-signup-password">Create password</label>
                                <span class="fa fa-lock"></span>
                            </div>
                            <a href="#" class="btn rounded-pill pxp-modal-cta">Continue</a>
                            <div class="mt-4 text-center pxp-modal-small">
                                Already have an account? <a role="button" class="" data-bs-target="#pxp-signin-modal" data-bs-toggle="modal">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nav.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>

<?php
}
?>