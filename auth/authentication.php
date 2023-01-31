<?php
session_start();
include('../config/connect.php');
if (isset($_SESSION["wcSession"]) == session_id()) {
    header("Location: ../index.php");
    die();
} else {

    // Register check
    if (isset($_POST['registerSubmit'])) {
        // Empty check
        if (!empty($_POST['email']) and !empty($_POST['mob'])) {
            // Collecting values
            extract($_POST);
            //check password and confirm password

            //Check if mobile already exisit
            $checkMobile = "SELECT * FROM tbl_register WHERE mob='$mob' and user_status!=0";
            $checkMobileResult = mysqli_query($connect, $checkMobile);
            $checkMobileCount = mysqli_num_rows($checkMobileResult);
            //No user exists
            if ($checkMobileCount == 0) {
                //CHECK IF EMAIL ALREADY EXISTS
                $checkEmail = "SELECT * FROM `tbl_register` WHERE `email`='$email' and user_status!=0";
                $checkEmailResult = mysqli_query($connect, $checkEmail);
                $checkEmailCount = mysqli_num_rows($checkEmailResult);

                //No user exists
                if ($checkEmailCount == 0) {
                        $password = md5( $password);
                        $date = date("Y-m-d");
                        //Insert into database
                        $insertDb = "INSERT INTO `tbl_register`(`username`, `mob`, `email`,`dob`, `password`, `address`, `user_created_at`, `type_id`) VALUES ('$uname','$mob','$email','$dob','$password','$uaddress','$date','$role')";
                        $insertDbResult = mysqli_query($connect, $insertDb);

                        $insertLogin = "INSERT INTO `tbl_login`(`user_id`,`username`,`email`,`password`,`type_id`) VALUES ((select user_id from tbl_register where `email`='$email'),'$uname','$email','$password','$role')";
                        $insertLoginResult = mysqli_query($connect, $insertLogin);
                        if ($insertDbResult) {
                            $userInsertedId = mysqli_insert_id($connect);
                              if ($role == 2) {
                                $insertDb2 = "INSERT INTO `tbl_customer`(`user_id`,`cus_name`, `mob`, `email`,`dob`, `password`,`address`, `user_created_at`) VALUES ((select user_id from tbl_register where `email`='$email'),'$uname','$mob','$email','$dob','$password','$uaddress','$date')";
                                $insertDbResult2 = mysqli_query($connect, $insertDb2);
                              }
                              if ($role == 3) {
                                $insertDb3 = "INSERT INTO `tbl_worker`(`user_id`,`wor_name`, `mob`, `email`,`dob`, `password`,`address`,`user_created_at`) VALUES ((select user_id from tbl_register where `email`='$email'),'$uname','$mob','$email','$dob','$password','$uaddress','$date')";
                                $insertDbResult3 = mysqli_query($connect, $insertDb3);
                              }
                            $_SESSION['loginMessage'] = "Register Success";
                            header("Location: ../login.php");
                            die();
                        } else {
                            $_SESSION['loginMessage'] = "User Register Failed";
                            header("Location: signup.php");
                            die();
                        }
                    
                } else {
                    $_SESSION['loginMessage'] = "User Email Already exisit";
                    header("Location: signup.php");
                    die();
                }
            } else {
                $_SESSION['loginMessage'] = "User Mobile Already exisit";
                header("Location: signup.php");
                die();
            }
        } else {
            $_SESSION['loginMessage'] = "Please fill all fields";
            header("Location: signup.php");
            die();
        }
    }
    // Login check
    if (isset($_POST['LoginSubmit'])) {
        // Empty check
        if (!empty($_POST['email']) and !empty($_POST['password'])) {
            // Collecting values
            extract($_POST);
            $password = md5($password);
            
            $checkLogin = "SELECT * FROM `tbl_login` WHERE `email`='$email' and `password`='$password'";
            $checkLoginResult = mysqli_query($connect, $checkLogin);
            $checkLoginCount = mysqli_num_rows($checkLoginResult);
            //No user exists
            if ($checkLoginCount == 1) {
                $userData = mysqli_fetch_assoc($checkLoginResult);
                if ($userData['user_status'] != 1) {
                    $_SESSION['loginMessage'] = "Your account has been disabled. Please contact admin";
                    header("Location: ../login.php");
                    die();
                } else {
                    $_SESSION['userName'] = $userData['username'];
                    $_SESSION['userId'] = $userData['user_id'];
                    $_SESSION['currentUserTypeId'] = $userData['type_id'];
                    $secret = "6LdvmT0kAAAAAGbjRSAO6VUY02HblU7SSiaHlb3c";
                    $response = $_POST["g-recaptcha-response"];
                    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
                    $captcha_success=json_decode($verify);
                    if ($captcha_success->success==false) {
                        $_SESSION['loginMessage'] = "reCAPTCHA Verification Failed";
                        header("Location: ../login.php");
                        die();
                    } else if ($captcha_success->success==true) {
                        // reCAPTCHA verification succeeded, continue with form processing
                   
                    if ($userData['type_id'] == 1) {
                        $_SESSION['wcSessionAdmin'] = session_id();
                        header("Location: ../admin/adminDashboard.php");
                        die();
                    } 
                    else if ($userData['type_id'] == 2){
                        $_SESSION['wcSession'] = session_id();
                        
                        header("Location: ../customer/customer_index.php");
                        die();
                    }
                    else if ($userData['type_id'] == 3){
                        $_SESSION['wcSession'] = session_id();
                        header("Location: ../worker/worker_index.php");
                        die();
                    }
                    else {
                        header("Location: ../login.php");
                        die();
                    }
                }
                }
            } else {
                $_SESSION['loginMessage'] = "User Login Failed";
                header("Location: ../login.php");
                die();
            }
        } else {
            $_SESSION['loginMessage'] = "Please fill all fields";
            header("Location: ../login.php");
            die();
        }
    }
}
?>