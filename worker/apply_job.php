
    

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

header("Location: joblist.php");
}

?>