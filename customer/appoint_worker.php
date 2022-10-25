<?php
$uId = $_GET['uid'];
$jId = $_GET['jid'];
include('../config/connect.php');  
//update user_status in tbl_user table
$sql1 = "UPDATE `tbl_applied_jobs` SET `status`='1' WHERE `user_id`='$uId' AND `job_id`='$jId'";
            $result1 = mysqli_query($connect, $sql1);

header("Location: CustomerDashboard-manage_jobs.php");
?>