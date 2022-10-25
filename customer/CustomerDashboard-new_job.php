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
    <body style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-preloader"><span>Loading...</span></div>

        <div class="pxp-dashboard-side-panel d-none d-lg-block">
            <div class="pxp-logo">
                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
            </div>

            <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
                <div class="pxp-dashboard-side-label">Customer tools</div>
                <ul class="list-unstyled">
                    <li><a href="customer_index.php"><span class="fa fa-home"></span>Home</a></li>
                    <li><a href="CustomerDashboard-Profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                    <li class="pxp-active"><a href="CustomerDashboard-new_job.php"><span class="fa fa-file-text-o"></span>New Job</a></li>
                    <li><a href="CustomerDashboard-manage_jobs.php"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                    <li><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                    <li><a href="company-dashboard-subscriptions.html"><span class="fa fa-credit-card"></span>Subscriptions</a></li>
                    <li><a href="CustomerDashboard-changepassword.php"><span class="fa fa-lock"></span>Change Password</a></li>
                </ul>
            </nav>

            <nav class="pxp-dashboard-side-user-nav-container">
                <div class="pxp-dashboard-side-user-nav">
                    <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(../images/company-logo-1.png);"></div>
                            <div class="pxp-dashboard-side-user-nav-name"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logoutController.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="pxp-dashboard-content">
            <div class="pxp-dashboard-content-header">
                <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
                    <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                        <div class="pxp-line-1"></div>
                        <div class="pxp-line-2"></div>
                        <div class="pxp-line-3"></div>
                    </a>
                    <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard" tabindex="-1" id="pxpMobileNav">
                        <div class="offcanvas-header">
                            <div class="pxp-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav class="pxp-nav-mobile">
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="pxp-dropdown-header">Customer tools</li>
                                    <li class="nav-item"><a href="customer_index.php"><span class="fa fa-home"></span>Home</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-Profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-new_job.php"><span class="fa fa-file-text-o"></span>New Job</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-manage_jobs.php"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                                    <li class="nav-item"><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                                    <li class="nav-item"><a href="company-dashboard-subscriptions.html"><span class="fa fa-credit-card"></span>Subscriptions</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-changepassword.php"><span class="fa fa-lock"></span>Change Password</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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

            <div class="pxp-dashboard-content-details">
                <h1>New Job</h1>
                <p class="pxp-text-light">Add a new job to your jobs list.</p>

                <form action="add_new_job.php" method="POST">
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-xxl-6">
                            <div class="mb-3">
                                <label for="pxp-company-job-title" class="form-label">Job title</label>
                                <input type="text" id="jobtitle" name="jobtitle" class="form-control" placeholder="Add title">
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-category" class="form-label">District</label>
                                <select id="district" name="district" class="form-select">
                                    <option>Choose a District</option>
                                    <option>Alappuzha</option>
                                    <option>Ernakulam</option>
                                    <option>Idukki</option>
                                    <option>Kannur</option>
                                    <option>Kasaragod</option>
                                    <option>Kollam</option>
                                    <option>Kottayam</option>
                                    <option>Kozhikode</option>
                                    <option>Malappuram</option>
                                    <option>Palakkad</option>
                                    <option>Pathanamthitta</option>
                                    <option>Thiruvananthapuram</option>
                                    <option>Thrissur</option>
                                    <option>Wayanad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <label for="pxp-company-job-location" class="form-label">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="E.g. San Francisco, CA">
                        </div>
                        
                    </div>

                    <div class="mb-3">
                        <label for="pxp-company-job-description" class="form-label">Job description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Type the description here..."></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-experience" class="form-label">Experience</label>
                                <input type="text" id="experience" name="experience" class="form-control" placeholder="E.g. Minimum 3 years">
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-level" class="form-label">Career level</label>
                                <select id="pxp-company-job-level" class="form-select">
                                    <option>No Experience</option>
                                    <option>Entry-Level</option>
                                    <option>Mid-Level</option>
                                    <option>Senior-Level</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-type" class="form-label">Employment type</label>
                                <select id="jobtype" name="jobtype" class="form-select">
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                    <option>Contract</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-xxl-3">
                            <div class="mb-3">
                                <label for="pxp-company-job-salary" class="form-label">Salary range</label>
                                <select id="salary" name="salary" class="form-select">
                                    <option>Select range</option>
                                    <option>below ₹500</option>
                                    <option>₹500 - ₹1000</option>
                                    <option>₹1000 - ₹2000</option>
                                    <option>above ₹2000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <button type="submit"  value ="<?=$_SESSION['userId']?>"  class="btn rounded-pill pxp-section-cta" name="publishjob" id="publishjob">Publish Job</button>
                        <!-- <button class="btn rounded-pill pxp-section-cta-o ms-3">Save Draft</button> -->
                    </div>
                </form>
            </div>

            <footer>
                <div class="pxp-footer-copyright pxp-text-light">© 2022 We-Connect. All Right Reserved.</div>
            </footer>
        </div>

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../../../cdn.jsdelivr.net/npm/bootstrap%405.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/nav.js"></script>
        <script src="../js/Chart.min.js"></script>
        <script src="../js/main.js"></script>
    </body>


</html>
<?php
}
?>