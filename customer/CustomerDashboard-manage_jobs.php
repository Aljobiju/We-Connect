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

        <title>We-Connect - Company dashboard - Manage jobs</title>
    </head>
    <body style="background-color: var(--pxpMainColorLight);">
        <div class="pxp-preloader"><span>Loading...</span></div>

        <div class="pxp-dashboard-side-panel d-none d-lg-block">
            <div class="pxp-logo">
                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
            </div>

            <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
                <div class="pxp-dashboard-side-label">Admin tools</div>
                <ul class="list-unstyled">
                    <li><a href="company-dashboard.html"><span class="fa fa-home"></span>Dashboard</a></li>
                    <li><a href="CustomerDashboard-Profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                    <li><a href="CustomerDashboard-new_job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                    <li class="pxp-active"><a href="CustomerDashboard-manage_jobs.php"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
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
                            <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
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
                                    <li class="pxp-dropdown-header">Admin tools</li>
                                    <li class="nav-item"><a href="company-dashboard.html"><span class="fa fa-home"></span>Dashboard</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-Profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                                    <li class="nav-item"><a href="CustomerDashboard-new_job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
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
                    <a href="company-dashboard-new-job.html" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                    <div class="dropdown pxp-user-nav-dropdown">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(../images/company-logo-1.png);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logoutController.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="pxp-dashboard-content-details">
                <h1>Manage Jobs</h1>
                <p class="pxp-text-light">Detailed list with all your job offers.</p>

                <div class="mt-4 mt-lg-5">
                    <!-- <div class="row justify-content-between align-content-center">
                        <div class="col-auto order-1 order-sm-2">
                            <div class="pxp-company-dashboard-jobs-search mb-3">
                                <div class="pxp-company-dashboard-jobs-search-results me-3">16 jobs</div>
                                <div class="pxp-company-dashboard-jobs-search-search-form">
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search jobs...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="table-responsive">
            
                                           
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <!-- <th class="pxp-is-checkbox" style="width: 1%;"><input type="checkbox" class="form-check-input"></th> -->
                                    <th style="width: 25%;">Job</th>
                                    <th style="width: 20%;">Description</th>
                                    <th style="width: 12%;">Type</th>
                                    <th style="width: 15%;">Applications</th>
                                    <th>Date</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                
                            <?php
                                         $sql="SELECT * FROM tbl_job_details WHERE `user_id`= $_SESSION[userId]";
                                        $result = $connect->query($sql);
                                         if($result->num_rows > 0){ 
                                        while($row = $result->fetch_assoc()) {
                                            $user_id=$row['user_id'];
                                            ?>
                                <tr>
                                    <!-- <td><input type="checkbox" class="form-check-input"></td> -->
                                    <td>
                                        <a href="#">
                                            <div class="pxp-company-dashboard-job-title"><?php echo $row['job_title'] ?></div>
                                            <div class="pxp-co mpany-dashboard-job-location"><span class="fa fa-globe me-1"></span><?php echo $row['city'] ?>, <?php echo $row['district'] ?></div>
                                        </a>
                                    </td>
                                    <td><div class="pxp-company-dashboard-job-category"><?php echo $row['job_description'] ?></div></td>
                                    <td><div class="pxp-company-dashboard-job-type"><?php echo $row['job_type'] ?></div></td>
                                    <td><a href="#" class="pxp-company-dashboard-job-applications">3 Candidates</a></td>
                                    <td>
                                        <!-- <div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-success">Published</span></div> -->
                                        <div class="pxp-company-dashboard-job-date mt-1"><?php echo $row['job_created_at'] ?></div>
                                    </td>
                                    
                                    <td>
                                    <?php
                                         $sql1="SELECT * FROM tbl_job_details";
                                        $result1 = $connect->query($sql1);
                                         if($result1->num_rows > 0){ 
                                        /*while($row1 = $result1->fetch_assoc()) {*/
                                          $id=trim($row['id']);
                                            ?>
                                    
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <!-- <li><button title="Edit"><span class="fa fa-pencil"></span></button></li>
                                                <li><button title="Preview"><span class="fa fa-eye"></span></button></li> -->
                                                <li><button onclick="location.href='deleteJob.php?jid= <?php echo $id ?>'" title="Delete"><span class="fa fa-trash-o"></span></button></li>
                                            </ul>
                                        </div>
                                        <?php
                                    }
                                         }
                                        }
                                         ?>
                                    </td>
                                    
                                </tr>
                               
                                    
                            </tbody>
                            
                        </table>
                       

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
                </div>
            </div>

            <footer>
                <div class="pxp-footer-copyright pxp-text-light">© 2022 We-Connect . All Right Reserved.</div>
            </footer>
        </div>

        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/nav.js"></script>
        <script src="../js/Chart.min.js"></script>
        <script src="../js/main.js"></script>
    </body>

</html>
<?php
}
?>