<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
} else {
    


if(isset($_POST['savepassword']))
{
    //echo"hi";
    $id = $_POST['savepassword'];
    $oldpsw = $_POST['oldpassword'];
    $newpsw = $_POST['newpassword'];
    $confirmpsw = $_POST['confirmpassword'];

    
    $sql="SELECT * FROM tbl_worker WHERE `user_id`= $_SESSION[userId]";
    $result = $connect->query($sql);
    while($row = $result->fetch_assoc()) {
       // $user_id=trim($row['user_id']);
       $psw = md5($oldpsw);
       $newpassword = md5($newpsw);
        if ($psw != $row['password'])

        {
               

        $_SESSION['status'] = "old password is incorrect,check carefully";
       $_SESSION['status_code'] = "error";
       echo "<script> alert('old password is incorrect'); 
       window.location.href='CustomerDashboard-Profile.php';
       </script>";
        }
        else{
            
            $sql1 = "UPDATE `tbl_worker` SET `password`='$newpassword' WHERE `user_id`='$id'";
            $result1 = mysqli_query($connect, $sql1);
            $sql2 = "UPDATE `tbl_login` SET `password`='$newpassword' WHERE `user_id`='$id'";
            $result2 = mysqli_query($connect, $sql2);
            $sql3 = "UPDATE `tbl_register` SET `password`='$newpassword' WHERE `user_id`='$id'";
            $result3 = mysqli_query($connect, $sql3);
            
            
            $_SESSION['status'] = "password changed";
       $_SESSION['status_code'] = "success";
       echo "<script> alert('password changed'); 
       window.location.href='WorkerDashboard-change_password.php';
       </script>";
            
        }


}
}
}


?>





