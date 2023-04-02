<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {
    $name = $_GET['query1'];
    $location = $_GET['query2'];
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

        <title>We-Connect - Job List</title>
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
                                    <a href="worker_index.php" >Home</a>
                                  
                                </li>
                                <li class="dropdown">
                                    <a href="joblist.php">Find Jobs</a>
                                </li>
                                <li class="dropdown">
                                    <a href="WorkerDashboard-profile.php">Dashboard</a>
                                </li>
                                <li class="dropdown">
                                <a href="subscription_worker.php">Subscription</a>
                            </li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Candidates</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    <nav class="pxp-user-nav pxp-on-light">
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
                    </nav>
                </div>
            </div>
        </header>

        <section class="pxp-page-header-simple" style="background-color: var(--pxpMainColorLight);">
            <div class="pxp-container">
                <h1>Search Jobs</h1>
                <div class="pxp-hero-subtitle pxp-text-ligh">Search your career opportunity through <strong>12,800</strong> jobs</div>
                <div class="pxp-hero-form pxp-hero-form-round pxp-large mt-3 mt-lg-4">
                <form class="row gx-3 align-items-center" action="search_job.php" method="GET">
                        <div class="col-12 col-lg">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-search"></span></span>
                                <input name="query1" type="text" class="form-control" placeholder="Job Title or Keyword">
                            </div>
                        </div>
                        <div class="col-12 col-lg pxp-has-left-border">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-globe"></span></span>
                                <input type="text" name="query2" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        <!-- <div class="col-12 col-lg pxp-has-left-border">
                            <div class="input-group mb-3 mb-lg-0">
                                <span class="input-group-text"><span class="fa fa-folder-o"></span></span>
                                <select class="form-select">
                                    <option selected="">All categories</option>
                                    <option>Business Development</option>
                                    <option>Construction</option>
                                    <option>Customer Service</option>
                                    <option>Finance</option>
                                    <option>Healthcare</option>
                                    <option>Human Resources</option>
                                    <option>Marketing &amp; Communication</option>
                                    <option>Project Management</option>
                                    <option>Software Engineering</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-12 col-lg-auto">
                            <button>Find Jobs</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="mt-100">
            <div class="pxp-container">
                <div class="pxp-jobs-list-top mt-3 mt-lg-4">
                <a href="joblist.php" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Reset filter<span class="fa fa-angle-right"></span></a>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h2><span class="pxp-text-light">Showing jobs</span></h2>
                        </div>
                        <!-- <div class="col-auto">
                            <select class="form-select">
                                <option value="0" selected>Most relevant</option>
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                            </select>
                        </div> -->
                    </div>
                </div>

                <div>

                <?php
                                         $sql = "SELECT * FROM tbl_job_details WHERE job_title LIKE '%$name%' AND district LIKE '%$location%' AND city LIKE '%$location%'  AND `status`= 1";
                                        $result = $connect->query($sql);
                                         if($result->num_rows > 0){ 
                                        while($row = $result->fetch_assoc()) {
                                            $job_id=$row['id'];
                                            ?>
                                           
                    <div class="pxp-jobs-card-3 pxp-has-border">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-sm-3 col-md-2 col-xxl-auto">
                                <a href="single-company-1.html" class="pxp-jobs-card-3-company-logo" style="background-image: url(../images/company-logo-1.png);"></a>
                            </div>
                            <div class="col-sm-9 col-md-10 col-xxl-4">
                                <a href="single-job-1.html" class="pxp-jobs-card-3-title mt-3 mt-sm-0"><?php echo $row['job_title'] ?></a>
                                <div class="pxp-jobs-card-3-details">
                                    <a href="jobs-list-1.html" class="pxp-jobs-card-3-location">
                                        <span class="fa fa-globe"></span><?php echo $row['city'] ?>, <?php echo $row['district'] ?>
                                    </a>
                                    <div class="pxp-jobs-card-3-type"><?php echo $row['job_type'] ?></div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-xxl-4 mt-3 mt-xxl-0">
                                <a href="jobs-list-1.html" class="pxp-jobs-card-3-category">
                                    <div class="pxp-jobs-card-3-category-label">Experience : <?php echo $row['experience'] ?> Year</div>
                                </a>
                                <div class="pxp-jobs-card-3-date-company">
                                    <span class="pxp-jobs-card-3-date pxp-text-light"><?php echo $row['job_created_at'] ?></span>    
                                    <a href="#" class="pxp-jobs-card-3-company"><?php echo $row['user_name'] ?></a>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 col-xxl-auto mt-3 mt-xxl-0 pxp-text-right">
                                <a href="apply_job.php?jobid= <?php echo $job_id ?>" class="btn rounded-pill pxp-card-btn">Apply</a>
                            </div>
                        </div>
                    </div>
                    <?php
                                        }
                                    }
                                      
                                    ?>

                   
                </div>

                <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                    <div class="col-auto">
                        <nav class="mt-3 mt-sm-0" aria-label="Jobs list pagination">
                            <ul class="pagination pxp-pagination">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn rounded-pill pxp-section-cta mt-3 mt-sm-0">Show me more<span class="fa fa-angle-right"></span></a>
                    </div>
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
    </body>

</html>
<?php
}

?>