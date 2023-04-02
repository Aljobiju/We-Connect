<?php
$uId = $_GET['uid'];
$jId = $_GET['jid'];
include('../config/connect.php');  
//update user_status in tbl_user table
$sql1 = "UPDATE `tbl_applied_jobs` SET `status`='1' WHERE `user_id`='$uId' AND `job_id`='$jId'";
            $result1 = mysqli_query($connect, $sql1);

            if($result1)
            {
                //$_SESSION['status'] = "Your Data is Updated";
                //$_SESSION['status_code'] = "success";
                echo "<script> alert('Worker Approved'); 
                window.location.href='send_sms.php';</script>";
                //header('Location: reg_gyno.php'); 
            }
            else
            {
               // $_SESSION['status'] = "error";
               // $_SESSION['status_code'] = "error";
               echo "<script> alert('Not Approved'); 
               window.location.href='CustomerDashboard-manage_jobs.php.php';
               </script>";
               // header('Location: reg_gyno.php'); 
            } 

// header("Location: CustomerDashboard-manage_jobs.php");
?>