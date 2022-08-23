<?php
$uId = $_GET['uid'];
include('../config/connect.php');
//update user_status in tbl_user table
$sql1 = "UPDATE `tbl_customer` SET `status`='1' WHERE `user_id`='$uId'";
            $result1 = mysqli_query($connect, $sql1);
            $sql2 = "UPDATE `tbl_login` SET `user_status`='1' WHERE `user_id`='$uId'";
            $result2 = mysqli_query($connect, $sql2);

header("Location: manageUsers.php");
?>