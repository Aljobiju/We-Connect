<?php
$jId = $_GET['jid'];
include('../config/connect.php');  
//update user_status in tbl_user table
$sql1 = "DELETE FROM tbl_job_details WHERE `id`='$jId'";
            $result1 = mysqli_query($connect, $sql1);

header("Location: CustomerDashboard-manage_jobs.php");
?>