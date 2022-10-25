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

        <title>We-Connect - Worker dashboard - Edit profile</title>
    </head>
    <body style="background-color: var(--pxpSecondaryColorLight);">
        <div class="pxp-preloader"><span>Loading...</span></div>

        <div class="pxp-dashboard-side-panel d-none d-lg-block">
            <div class="pxp-logo">
                <a href="index.html" class="pxp-animate"><span style="color: var(--pxpMainColor)">We</span>-Connect</a>
            </div>

            <nav class="mt-3 mt-lg-4 d-flex justify-content-between flex-column pb-100">
                <div class="pxp-dashboard-side-label">Worker tools</div>
                <ul class="list-unstyled">
                    <li><a href="worker_index.php"><span class="fa fa-home"></span>Home</a></li>
                    <li class="pxp-active"><a href="WorkerDashboard-profile.php"><span class="fa fa-pencil"></span>Edit Profile</a></li>
                    <li><a href="WorkerDashboard-applications.php"><span class="fa fa-file-text-o"></span>Apllications</a></li>
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
                                    <li class="nav-item"><a href="candidate-dashboard-applications.html"><span class="fa fa-file-text-o"></span>Apllications</a></li>
                                    <li class="nav-item"><a href="candidate-dashboard-fav-jobs.html"><span class="fa fa-heart-o"></span>Favourite Jobs</a></li>
                                    <li class="nav-item"><a href="WorkerDashboard-change_password.php"><span class="fa fa-lock"></span>Change Password</a></li>
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
                <h1>Edit Profile</h1>
                <p class="pxp-text-light">Edit your candidate profile page info.</p>
                <?php
 $sql="SELECT * FROM tbl_worker WHERE `user_id`= $_SESSION[userId]";
 $result = $connect->query($sql);
 while($row = $result->fetch_assoc()) {
    // $user_id=trim($row['user_id']);
     ?>
                <form action="updateprofile.php" method="POST">
                    <div class="row mt-4 mt-lg-5">
                        <div class="col-xxl-8">
                            <div class="mb-3">
                                <label for="pxp-candidate-name" class="form-label">Name</label>
                                <input type="text" name="wor_name" id="wor_name" class="form-control" value="<?php echo $row["wor_name"]?>" placeholder="Add your name">
                            </div>
                            <div class="mb-3">
                                <label for="pxp-candidate-name" class="form-label">Address</label>
                                <input type="text" name="wor_address" id="wor_address" class="form-control" value="<?php echo $row["address"]?>" placeholder="Add your Address">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-candidate-title" class="form-label">Date of Birth</label>
                                        <input type="date" name="wor_dob" id="wor_dob" class="form-control" value="<?php echo $row["dob"]?>" placeholder="E.g. Web Designer">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-candidate-location" class="form-label">Work Experience</label>
                                        <input type="tel" name="wor_exp" id="wor_exp" class="form-control" value="<?php echo $row["experience"]?>" placeholder="In Years">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-candidate-email" class="form-label">Email</label>
                                        <input type="email" readonly name="wor_email"id="wor_email" class="form-control"  value="<?php echo $row["email"]?>" placeholder="candidate@email.com">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="pxp-candidate-phone" class="form-label">Phone</label>
                                        <input type="tel" name="wor_phone"id="wor_phone" class="form-control"  value="<?php echo $row["mob"]?>" placeholder="(+12) 345 6789">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xxl-4">
                            <div class="form-label">&nbsp;</div>
                            <div class="pxp-candidate-cover mb-3">
                                <input type="file" id="pxp-candidate-cover-choose-file" accept="image/*">
                                <label for="pxp-candidate-cover-choose-file" class="pxp-cover"><span>Upload Cover Image</span></label>
                            </div>
                            <div class="pxp-candidate-photo mb-3">
                                <input type="file" id="pxp-candidate-photo-choose-file" accept="image/*">
                                <label for="pxp-candidate-photo-choose-file" class="pxp-cover"><span>Upload<br>Photo</span></label>
                            </div>
                        </div> -->
                    </div>

                    <div class="mb-3">
                        <label for="pxp-candidate-about" class="form-label">About you</label>
                        <textarea class="form-control" name="wor_about" id="wor_about"  value="<?php echo $row["about"]?>" placeholder="Type your info here..."></textarea>
                    </div>

                    <div class="mt-4 mt-lg-5">
                        <h2>Skills</h2>
                        <!-- <div class="pxp-candidate-dashboard-skills mb-3">
                            <ul class="list-unstyled">
                                <li>Work from home<span class="fa fa-trash-o"></span></li>
                                <li>Part-time<span class="fa fa-trash-o"></span></li>
                                <li>Administration<span class="fa fa-trash-o"></span></li>
                                <li>Finance<span class="fa fa-trash-o"></span></li>
                                <li>Retail<span class="fa fa-trash-o"></span></li>
                                <li>IT<span class="fa fa-trash-o"></span></li>
                                <li>Engineering<span class="fa fa-trash-o"></span></li>
                                <li>Sales<span class="fa fa-trash-o"></span></li>
                                <li>Manufacturing<span class="fa fa-trash-o"></span></li>
                            </ul>
                        </div> -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="wor_skills"  id="wor_skills"  value="<?php echo $row["skills"]?>" placeholder="Skill">
                            <!-- <button class="btn">Add Skill</button> -->
                        </div>
                    </div>

                    <div class="mt-4 mt-lg-5">
                    <button type="submit" value ="<?=$row['user_id']?>" class="btn rounded-pill pxp-section-cta" name="updatebtn" id="updatebtn">Save Profile</button>
                    </div>
                </form>
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
}
?>