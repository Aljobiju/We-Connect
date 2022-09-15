<?php
include('./config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ./login.php");
    die();
} else {
    


if(isset($_POST['updatebtn']))
{
    //echo"hi";
    $id = $_POST['updatebtn'];
    $name = $_POST['cus_name'];
    $email = $_POST['cus_email'];
    $phone = $_POST['cus_phone'];
    $address = $_POST['cus_address'];
    $dob = $_POST['cus_dob'];
    
            // $sql = "UPDATE `tbl_customer` SET cus_name=`$name` WHERE user_id= `$id`";
            $sql1 = "UPDATE `tbl_customer` SET `cus_name`='$name',`mob`='$phone',`email`='$email',`dob`='$dob',`address`='$address' WHERE `user_id`='$id'";
    $result1 = mysqli_query($connect, $sql1);

    $sql2 = "UPDATE `tbl_login` SET `username`='$name' WHERE `user_id`='$id'";
             $result2 = mysqli_query($connect, $sql2);

             $sql3 = "UPDATE `tbl_register` SET `username`='$name',`mob`='$phone',`email`='$email',`dob`='$dob',`address`='$address' WHERE `user_id`='$id'";
    $result3 = mysqli_query($connect, $sql3);
   
               

    if($result1)
    {
        //$_SESSION['status'] = "Your Data is Updated";
        //$_SESSION['status_code'] = "success";
        echo "<script> alert('Your Data is Updated'); 
        window.location.href='CustomerDashboard-Profile.php';</script>";
        //header('Location: reg_gyno.php'); 
    }
    else
    {
       // $_SESSION['status'] = "Your Data is NOT Updated";
       // $_SESSION['status_code'] = "error";
       echo "<script> alert('Your Data is not Updated'); 
       window.location.href='CustomerDashboard-Profile.php';
       </script>";
       // header('Location: reg_gyno.php'); 
    }
}
}


?>





