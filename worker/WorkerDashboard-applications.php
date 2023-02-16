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

        <title>We-Connect - Worker dashboard - Applications</title>
    </head>
    <body style="background-color: var(--pxpSecondaryColorLight);">
     <!-- Google translate start -->
<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
                            <script >
                                function loadGoogleTranslate(){
                                   new google.translate.TranslateElement("google_translate_element");
                                }
                            </script>
     <!-- Google translate end -->
        <div class="pxp-preloader"><span>Loading...</span></div>

        <div class="pxp-dashboard-side-panel d-none d-lg-block">
            <div class="pxp-logo">
                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
            </div>

            <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
                <div class="pxp-dashboard-side-label">Worker tools</div>
                <ul class="list-unstyled">
                    <li><a href="worker_index.php"><span class="fa fa-home"></span>Home</a></li>
                    <li><a href="WorkerDashboard-profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                    <li class="pxp-active"><a href="WorkerDashboard-applications.php"><span class="fa fa-file-text-o"></span>Applications</a></li>
                    <li><a href="candidate-dashboard-fav-jobs.html"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
                    <li><a href="WorkerDashboard-change_password.php"><span class="fa fa-lock"></span>Change Password</a></li>
                </ul>
                <!-- <div class="pxp-dashboard-side-label mt-3 mt-lg-4">Insights</div>
                <ul class="list-unstyled">
                    <li>
                        <a href="candidate-dashboard-inbox.html" class="d-flex justify-content-between align-items-center">
                            <div><span class="fa fa-envelope-o"></span>Inbox</div>
                            <span class="badge rounded-pill">14</span>
                        </a>
                    </li>
                    <li>
                        <a href="candidate-dashboard-notifications.html" class="d-flex justify-content-between align-items-center">
                            <div><span class="fa fa-bell-o"></span>Notifications</div>
                            <span class="badge rounded-pill">5</span>
                        </a>
                    </li>
                </ul> -->
            </nav>

            <nav class="pxp-dashboard-side-user-nav-container pxp-is-candidate">
                <div class="pxp-dashboard-side-user-nav">
                    <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(../images/company-logo-1.png);"></div>
                            <div class="pxp-dashboard-side-user-nav-name"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="WorkerDashboard-profile.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="WorkerDashboard-profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="../auth/logoutController.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="pxp-dashboard-content">
            <div class="pxp-dashboard-content-header pxp-is-candidate">
                <div class="pxp-nav-trigger navbar pxp-is-dashboard d-lg-none">
                    <a role="button" data-bs-toggle="offcanvas" data-bs-target="#pxpMobileNav" aria-controls="pxpMobileNav">
                        <div class="pxp-line-1"></div>
                        <div class="pxp-line-2"></div>
                        <div class="pxp-line-3"></div>
                    </a>
                    <div class="offcanvas offcanvas-start pxp-nav-mobile-container pxp-is-dashboard pxp-is-candidate" tabindex="-1" id="pxpMobileNav">
                        <div class="offcanvas-header">
                            <div class="pxp-logo">
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav class="pxp-nav-mobile">
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="pxp-dropdown-header">Worker tools</li>
                                    <li class="nav-item"><a href="worker_index.php"><span class="fa fa-home"></span>Home</a></li>
                                    <li class="nav-item"><a href="candidate-dashboard-profile.html"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                                    <li class="nav-item"><a href="candidate-dashboard-applications.html"><span class="fa fa-file-text-o"></span>Applications</a></li>
                                    <li class="nav-item"><a href="candidate-dashboard-fav-jobs.html"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
                                    <li class="nav-item"><a href="candidate-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
                                    <!-- <li class="pxp-dropdown-header mt-4">Insights</li>
                                    <li class="nav-item">
                                        <a href="candidate-dashboard-inbox.html" class="d-flex justify-content-between align-items-center">
                                            <div><span class="fa fa-envelope-o"></span>Inbox</div>
                                            <span class="badge rounded-pill">14</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="candidate-dashboard-notifications.html" class="d-flex justify-content-between align-items-center">
                                            <div><span class="fa fa-bell-o"></span>Notifications</div>
                                            <span class="badge rounded-pill">5</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <nav class="pxp-user-nav pxp-on-light">
                    <!-- <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="fa fa-bell-o"></span>
                            <div class="pxp-user-notifications-counter">5</div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Artistre Studio</strong> viewed your profile. <span class="pxp-is-time">20m</span></a></li>
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>CoderBotics</strong> sent you a message. <span class="pxp-is-time">1h</span></a></li>
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Illuminate Studio</strong> viewed your profile. <span class="pxp-is-time">2h</span></a></li>
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Syspresoft</strong> sent you a message. <span class="pxp-is-time">5h</span></a></li>
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Artistre Studio</strong> viewed your profile. <span class="pxp-is-time">1d</span></a></li>
                            <li><a class="dropdown-item" href="candidate-dashboard-notifications.html"><strong>Illuminate Studio</strong> viewed your profile. <span class="pxp-is-time">3d</span></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item pxp-link" href="candidate-dashboard-notifications.html">Read All</a></li>
                        </ul>
                    </div> -->
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

            <div class="pxp-dashboard-content-details">
                <h1>Applications</h1>
                <p class="pxp-text-light">Detailed list of your job applications.</p>

                <div class="mt-4 mt-lg-5">
                    <div class="row justify-content-between align-content-center">
                        <!-- <div class="col-auto order-2 order-sm-1">
                            <div class="pxp-candidate-dashboard-jobs-bulk-actions mb-3">
                                <select class="form-select">
                                    <option>Bulk actions</option>
                                    <option>Delete</option>
                                </select>
                                <button class="btn ms-2">Apply</button>
                            </div>
                        </div> -->
                        <!-- <div class="col-auto order-1 order-sm-2">
                            <div class="pxp-candidate-dashboard-jobs-search mb-3">
                                <div class="pxp-candidate-dashboard-jobs-search-results me-3">16 job applications</div>
                                <div class="pxp-candidate-dashboard-jobs-search-search-form">
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fa fa-search"></span></span>
                                        <input type="text" class="form-control" placeholder="Search jobs...">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="table-responsive">

                   
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th style="width: 25%;">Job</th>
                                    <th style="width: 15%;">Recruiter</th>
                                    <!-- <th style="width: 20%;">Category</th> -->
                                    <th style="width: 12%;">Type</th>
                                    <th>Date<span class="fa fa-angle-up ms-3"></span></th>
                                    <th style="width: 25%;">Status</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                         $sql="SELECT * FROM tbl_job_details WHERE id IN (SELECT job_id FROM tbl_applied_jobs WHERE user_id='$_SESSION[userId]')";
                                        //  $sql1="SELECT * FROM tbl_worker WHERE user_id IN (SELECT user_id FROM tbl_applied_jobs WHERE job_id='$jId')";
                                        $result = $connect->query($sql);
                                         if($result->num_rows > 0){ 
                                        while($row = $result->fetch_assoc()) {
                                            $job_id=$row['id'];
                                            ?>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <div class="pxp-candidate-dashboard-job-title"><?php echo $row['job_title'] ?></div>
                                            <div class="pxp-candidate-dashboard-job-location"><span class="fa fa-globe me-1"></span><?php echo $row['city'] ?>,<?php echo $row['district'] ?></div>
                                        </a>
                                    </td>
                                    <td><a href="#" class="pxp-candidate-dashboard-job-company"><?php echo $row['user_name'] ?></a></td>
                                    <!-- <td><div class="pxp-candidate-dashboard-job-category">Marketing & Communication</div></td> -->
                                    <td><div class="pxp-candidate-dashboard-job-type"><?php echo $row['job_type'] ?></div></td>
                                    <td><div class="pxp-candidate-dashboard-job-date mt-1"><?php echo $row['job_created_at'] ?></div></td>
                                    
                                    <?php
                                        
                                          $sql1="SELECT * FROM tbl_applied_jobs WHERE job_id='$job_id' && user_id='$_SESSION[userId]'";
                                         $result1 = $connect->query($sql1);
                                          if($result1->num_rows > 0){ 
                                          while($row = $result1->fetch_assoc()) {
                                            //  $job_id=$row['id'];
                                            
                                                            if ($row['status'] == 1) {
                                                        ?>
														 <!-- <td><div class="pxp-candidate-dashboard-job-date mt-1">Approved</div></td> -->
                                                         <td><div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-success">Approved</span></div></td>
                                                    <?php
                                                           } 
                                                        else
                                                        {
                                                            ?>
                                                            
                                                            <td><div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-danger">Pending</span></div></td>
                                                            <!-- <td><div class="pxp-candidate-dashboard-job-date mt-1">Pending</div></td> -->
                                                            <?php
                                                        }?>

                                                


                                    <!-- <td><div class="pxp-company-dashboard-job-status"><span class="badge rounded-pill bg-success">Approved</span></div></td> -->
                                    
                                   <?php
                                          
                                                    }}
                                                }
                                        }
                                          ?>
        
                                </tr>
                                <?php
                                        //  }
                                        // }
                                
                                        ?>
                                
                            </tbody>
                          
                        </table>

                        <!-- <div class="row mt-4 mt-lg-5 justify-content-between align-items-center">
                            <div class="col-auto">
                                <nav class="mt-3 mt-sm-0" aria-label="Applications list pagination">
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
                        </div> -->
                    </div>
                </div>
            </div>

            <footer>
                <div class="pxp-footer-copyright pxp-text-light">© 2022 We-Connect. All Right Reserved.</div>
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