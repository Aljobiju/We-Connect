<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {
    

//$uId = $_GET['uid'];
include('config/connect.php');

$sql1 = "UPDATE `tbl_worker` SET `payment_status`='1' WHERE `user_id`='$_SESSION[userId]'";
            $result1 = mysqli_query($connect, $sql1);

header("Location: worker_index.php");

}
?>