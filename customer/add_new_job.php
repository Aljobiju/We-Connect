<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {



if(isset($_POST['publishjob']))
{
    //echo"hi";
    $id = $_POST['publishjob'];
    $title = $_POST['jobtitle'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $description = $_POST['description'];
    $exp = $_POST['experience'];
    $jobtype = $_POST['jobtype'];
    $salary = $_POST['salary'];
    $date = date("Y-m-d");

            // $sql = "UPDATE `tbl_customer` SET cus_name=`$name` WHERE user_id= `$id`";
            $sql = "INSERT INTO `tbl_job_details`(`user_id`,`job_title`,`district`,`city`,`job_description`,`experience`,`job_type`,`salary`,`job_created_at`) VALUES ('$id','$title','$district','$city','$description','$exp','$jobtype','$salary','$date')";
    $result = mysqli_query($connect, $sql);

    if($result)
    {
        //$_SESSION['status'] = "Your Data is Updated";
        //$_SESSION['status_code'] = "success";
        echo "<script> alert('job is sent for review'); 
        window.location.href='CustomerDashboard-new_job.php';</script>";
        //header('Location: reg_gyno.php'); 
    }
    else
    {
       // $_SESSION['status'] = "error";
       // $_SESSION['status_code'] = "error";
       echo "<script> alert('Your job is not posted'); 
       window.location.href='CustomerDashboard-new_job.php';
       </script>";
       // header('Location: reg_gyno.php'); 
    } 
}
}


?>
