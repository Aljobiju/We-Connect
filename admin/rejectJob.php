<?php
$uId = $_GET['uid'];
include('../config/connect.php');

$sql1 = "UPDATE `tbl_job_details` SET `status`='2' WHERE `id`='$uId'";
            $result1 = mysqli_query($connect, $sql1);
            // $sql2 = "UPDATE `tbl_login` SET `user_status`='0' WHERE `user_id`='$uId'";
            // $result2 = mysqli_query($connect, $sql2);

header("Location: jobDetails.php");
?>