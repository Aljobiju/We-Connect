<?php
include('../config/connect.php');
$uId = $_GET['uid'];
$jId = $_GET['jid'];
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

        <title>We-Connect - Worker_Profile</title>
    </head>
    <body>
        <div class="pxp-preloader"><span>Loading...</span></div>

        <header class="pxp-header fixed-top pxp-no-bg pxp-bigger">
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
                            <div class="offcanvas offcanvas-start pxp-nav-mobile-container" tabindex="-1" id="pxpMobileNav">
                                <div class="offcanvas-header">
                                    <div class="pxp-logo">
                                        <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                                    </div>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <nav class="pxp-nav dropdown-hover-all d-none d-xl-block">
                            <ul>
                                <li class="dropdown">
                                    <a href="customer_index.php" >Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="worker_list.php" >Find Workers</a>
                                </li>
                                <li class="dropdown">
                                    <a href="CustomerDashboard-Profile.php" >Dashboard</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Candidates</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Blog</a> -->
                                    <!-- <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-list-1.html">Articles Cards</a></li>
                                        <li><a class="dropdown-item" href="blog-list-2.html">Articles List</a></li>
                                        <li><a class="dropdown-item" href="blog-list-3.html">Articles Boxed</a></li>
                                        <li><a class="dropdown-item" href="single-blog-post.html">Single Article</a></li>
                                    </ul> -->
                                <!-- </li> -->
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                </li> -->
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
        <?php
        // echo $jId;
                                         $sql="SELECT * FROM tbl_worker WHERE user_id= '$uId'";
                                        $result = $connect->query($sql);
                                         if($result->num_rows > 0){ 
                                        while($row = $result->fetch_assoc()) {
                                            $user_id=$row['user_id'];
                                            ?>
        <section>
            <div class="pxp-container">
                <div class="pxp-single-candidate-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <div class="pxp-single-candidate-hero pxp-cover pxp-boxed" style="background-image: url(../images/candidate-cover-1.jpg);">
                                <div class="pxp-hero-opacity"></div>
                                <div class="pxp-single-candidate-hero-caption">
                                    <div class="pxp-single-candidate-hero-content d-block text-center">
                                        <div class="pxp-single-candidate-hero-avatar d-inline-block" style="background-image: url(../images/avatar-1.jpg);"></div>
                                        <div class="pxp-single-candidate-hero-name ms-0 mt-3">
                                            <h1><?php echo $row['wor_name'] ?></h1>
                                            <!-- <div class="pxp-single-candidate-hero-title">UX/UI Designer</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4 mt-lg-5">
                                <div class="col-lg-7 col-xxl-8">
                                    <div class="pxp-single-candidate-content">
                                        <h2>About <?php echo $row['wor_name'] ?></h2>
                                        <p>Lorem Ipsum is also known as: Greeked text, blind text, placeholder text, dummy content, filler text, lipsum, and mock-content. In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation.<?php echo $row['about'] ?></p>
                                        <p>In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Lorem Ipsum is also known as: Greeked text. </p>
            
                                        <div class="mt-4 mt-lg-5">
                                            <h2>Skills</h2>
                                            <div class="pxp-single-candidate-skills">
                                                <ul class="list-unstyled">
                                                    <li><?php echo $row['skills'] ?></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
            
                                        <div class="mt-4 mt-lg-5">
                                            <h2>Work Experience</h2>
                                            <p><?php echo $row['experience'] ?> Years</p>
                                        </div>
            
                                        <!-- <div class="mt-4 mt-lg-5">
                                            <h2>Education & Training</h2>
                                            <div class="pxp-single-candidate-timeline">
                                                <div class="pxp-single-candidate-timeline-item">
                                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2011 - 2017</span></div>
                                                        <div class="pxp-single-candidate-timeline-position mt-2">Architecure</div>
                                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Politehnica University of Timisoara: Bachelor of Architecture</div>
                                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Lorem Ipsum is also known as: Greeked text.</div>
                                                    </div>
                                                </div>
                                                <div class="pxp-single-candidate-timeline-item">
                                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2020 - 2020</span></div>
                                                        <div class="pxp-single-candidate-timeline-position mt-2">Front End Web Developer</div>
                                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Udacity Nanodegree Program</div>
                                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Lorem Ipsum is also known as: Greeked text.</div>
                                                    </div>
                                                </div>
                                                <div class="pxp-single-candidate-timeline-item">
                                                    <div class="pxp-single-candidate-timeline-dot"></div>
                                                    <div class="pxp-single-candidate-timeline-info ms-3">
                                                        <div class="pxp-single-candidate-timeline-time"><span class="me-3">2021 - 2021</span></div>
                                                        <div class="pxp-single-candidate-timeline-position mt-2">Build Responsive Real World Websites with HTML5 and CSS3</div>
                                                        <div class="pxp-single-candidate-timeline-company pxp-text-light">Udemy</div>
                                                        <div class="pxp-single-candidate-timeline-about mt-2 pb-4">In publishing and graphic design, lorem ipsum is a filler text or greeking commonly used to demonstrate the textual elements of a graphic document or visual presentation. Lorem Ipsum is also known as: Greeked text.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xxl-4">
                                    <div class="pxp-single-candidate-side-panel mt-5 mt-lg-0">
                                        <div>
                                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Email</div>
                                            <div class="pxp-single-candidate-side-info-data"><?php echo $row['email'] ?></div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Location</div>
                                            <div class="pxp-single-candidate-side-info-data"><?php echo $row['address'] ?></div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="pxp-single-candidate-side-info-label pxp-text-light">Phone</div>
                                            <div class="pxp-single-candidate-side-info-data"><?php echo $row['mob'] ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xxl-auto mt-3 mt-xxl-0 pxp-text-right">
                                <a href="appoint_worker.php?uid= <?php echo $user_id ?>&jid= <?php echo $jId ?>" class="btn rounded-pill pxp-card-btn">Approve Worker</a>
                            </div>
            
                                    <!-- <div class="pxp-single-candidate-side-panel mt-4 mt-lg-5">
                                        <h3>Contact Rebecca</h3>
                                        <form class="mt-4">
                                            <div class="mb-3">
                                                <label for="contact-candidate-name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="contact-candidate-name" placeholder="Enter your name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact-candidate-email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="contact-candidate-email" placeholder="Enter your email address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact-candidate-message" class="form-label">Message</label>
                                                <textarea class="form-control" id="contact-candidate-message" placeholder="Type your message here..."></textarea>
                                            </div>
                                            <a href="#" class="btn rounded-pill pxp-section-cta d-block">Send Message</a>
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
                                        }
                                    }
                                        ?>

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
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="pxp-main-footer-bottom" style="background-color: var(--pxpSecondaryColor);">
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