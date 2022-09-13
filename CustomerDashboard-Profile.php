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

        <title>We-Connect - Customer dashboard - Edit profile</title>
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
                    <li class="pxp-active"><a href="CustomerDashboard-Profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                    <li><a href="CustomerDashboard-new_job.php"><span class="fa fa-file-text-o"></span>New Job Offer</a></li>
                    <li><a href="company-dashboard-jobs.html"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                    <li><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                    <li><a href="company-dashboard-subscriptions.html"><span class="fa fa-credit-card"></span>Subscriptions</a></li>
                    <li><a href="company-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
                </ul>
            </nav>

            <nav class="pxp-dashboard-side-user-nav-container">
                <div class="pxp-dashboard-side-user-nav">
                    <div class="dropdown pxp-dashboard-side-user-nav-dropdown dropup">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-dashboard-side-user-nav-avatar pxp-cover" style="background-image: url(images/company-logo-1.png);"></div>
                            <div class="pxp-dashboard-side-user-nav-name"><?php echo $_SESSION['userName'] ?></div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="./auth/logoutController.php">Logout</a></li>
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
                                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">j</span>obster</a>
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
                                    <li class="nav-item"><a href="company-dashboard-jobs.html"><span class="fa fa-briefcase"></span>Manage Jobs</a></li>
                                    <li class="nav-item"><a href="company-dashboard-candidates.html"><span class="fa fa-user-circle-o"></span>Candidates</a></li>
                                    <li class="nav-item"><a href="company-dashboard-subscriptions.html"><span class="fa fa-credit-card"></span>Subscriptions</a></li>
                                    <li class="nav-item"><a href="company-dashboard-password.html"><span class="fa fa-lock"></span>Change Password</a></li>
                                    <!-- <li class="pxp-dropdown-header mt-4">Insights</li>
                                    <li class="nav-item">
                                        <a href="company-dashboard-inbox.html" class="d-flex justify-content-between align-items-center">
                                            <div><span class="fa fa-envelope-o"></span>Inbox</div>
                                            <span class="badge rounded-pill">14</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="company-dashboard-notifications.html" class="d-flex justify-content-between align-items-center">
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
                    <a href="CustomerDashboard-new_job.php" class="btn rounded-pill pxp-nav-btn">Post a Job</a>
                    <!-- <div class="dropdown pxp-user-nav-dropdown pxp-user-notifications">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="fa fa-bell-o"></span>
                            <div class="pxp-user-notifications-counter">5</div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Scott Goodwin</strong> applied for <strong>Software Engineer</strong>. <span class="pxp-is-time">20m</span></a></li>
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Alayna Becker</strong> sent you a message. <span class="pxp-is-time">1h</span></a></li>
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Erika Tillman</strong> applied for <strong>Team Leader</strong>. <span class="pxp-is-time">2h</span></a></li>
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Scott Goodwin</strong> applied for <strong>Software Engineer</strong>. <span class="pxp-is-time">5h</span></a></li>
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Alayna Becker</strong> sent you a message. <span class="pxp-is-time">1d</span></a></li>
                            <li><a class="dropdown-item" href="company-dashboard-notifications.html"><strong>Erika Tillman</strong> applied for <strong>Software Engineer</strong>. <span class="pxp-is-time">3d</span></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item pxp-link" href="company-dashboard-notifications.html">Read All</a></li>
                        </ul>
                    </div> -->
                    <div class="dropdown pxp-user-nav-dropdown">
                        <a role="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="pxp-user-nav-avatar pxp-cover" style="background-image: url(images/company-logo-1.png);"></div>
                            <div class="pxp-user-nav-name d-none d-md-block"><?php echo $_SESSION['userName'] ?> </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="company-dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="CustomerDashboard-Profile.php">Edit profile</a></li>
                            <li><a class="dropdown-item" href="index.html">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="pxp-dashboard-content-details">
                <h1>Edit Profile</h1>
                <p class="pxp-text-light">Edit your profile page info.</p>
<?php
 $sql="SELECT * FROM tbl_customer WHERE `user_id`= $_SESSION[userId]";
 $result = $connect->query($sql);
  if($result->num_rows > 0){ 
 foreach($result as $row) {
     ?>
                <form action="" method="post">
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-xxl-8">
                            <div class="mb-3">
                                <label for="pxp-company-name" class="form-label">Name</label>
                                <input type="text" id="cus_name" class="form-control" value="<?php echo $row["cus_name"]?>" placeholder="Enter Name">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-company-email" class="form-label">Email</label>
                                        <input type="email" readonly id="cus_email" class="form-control" value="<?php echo $row["email"]?>" placeholder="example@email.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-company-phone" class="form-label">Phone</label>
                                        <input type="tel" id="cus_phone" class="form-control" value="<?php echo $row["mob"]?>" placeholder="(+12) 345 6789">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="pxp-company-website" class="form-label">Address</label>
                                <input type="text" id="cus_address" class="form-control" value="<?php echo $row["address"]?>" placeholder="Address">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="pxp-company-industry" class="form-label">Date of birth</label>
                                <input type="Date" id="cus_dob" class="form-control"  value="<?php echo $row["dob"]?>"placeholder="01/01/2022">
                            </div>
                        </div>
                    <div class="mt-4 mt-lg-5">
                        <button class="btn rounded-pill pxp-section-cta" id="updatebtn">Save Profile</button>
                    </div>
                </form>
                <?php
            //     if (isset($_POST['updatebtn'])) {
            //         extract($_POST);
            //         $sql1 = "UPDATE `tbl_customer` SET 'cus_name'='$cus_name' WHERE `user_id`= $_SESSION[userId]";
            // $result1 = mysqli_query($connect, $sql1);
            //         ?>
            </div>

            <footer>
                <div class="pxp-footer-copyright pxp-text-light">© 2022 We-Connect. All Rights Reserved.</div>
            </footer>
        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nav.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

<?php
}
  }
}
// }
?>