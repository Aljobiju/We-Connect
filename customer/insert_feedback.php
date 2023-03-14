<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {
    

$uId = $_SESSION['userId'];


    //echo"hi";
    // $id = $_POST['subfeed'];
    $cmt = $_POST['feed']; 
//insert fo feedback table
$sql1 ="INSERT INTO tbl_feedback(user_id, comments) VALUES ('$uId','$cmt')";
            $result1 = mysqli_query($connect, $sql1);

header("Location: CustomerDashboard-Profile.php");
}
?>