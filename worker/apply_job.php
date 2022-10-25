
    

<?php
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ./login.php");
    die();
} else {
$jid = $_GET['jobid'];
include('../config/connect.php');
$id=$_SESSION['userId'];
$name=$_SESSION['userName'];

// $sql1 = "UPDATE `tbl_customer` SET `status`='1' WHERE `user_id`='$uId'";
$sql1 = "INSERT INTO `tbl_applied_jobs`(`job_id`,`user_id`,`user_name`) VALUES ('$jid','$id','$name')";
            $result1 = mysqli_query($connect, $sql1);

            if($sql1)
    {
        //$_SESSION['status'] = "Your Data is Updated";
        //$_SESSION['status_code'] = "success";
        echo "<script> alert('Your application is sent for review'); 
        window.location.href='joblist.php';</script>";
        //header('Location: reg_gyno.php'); 
    }
    else
    {
       // $_SESSION['status'] = "Your Data is NOT Updated";
       // $_SESSION['status_code'] = "error";
       echo "<script> alert('Application failed'); 
       window.location.href='joblist.php';
       </script>";
       // header('Location: reg_gyno.php'); 
    }

//header("Location: joblist.php");
}

?>