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
            $checkMobile = "SELECT * FROM tbl_user WHERE mob='$mob' and user_status!=0";
            $checkMobileResult = mysqli_query($connect, $checkMobile);
            $checkMobileCount = mysqli_num_rows($checkMobileResult);
            //No user exists
            if ($checkMobileCount == 0) {
                //CHECK IF EMAIL ALREADY EXISTS
                $checkEmail = "SELECT * FROM `tbl_user` WHERE `email`='$email' and user_status!=0";
                $checkEmailResult = mysqli_query($connect, $checkEmail);
                $checkEmailCount = mysqli_num_rows($checkEmailResult);

                //No user exists
                if ($checkEmailCount == 0) {
                        $password = md5($password);
                        $date = date("Y-m-d");
                        //Insert into database
                        $insertDb = "INSERT INTO `tbl_user`(`username`, `mob`, `email`,`dob`, `password`, `user_created_at`, `type_id`) VALUES ('$uname','$mob','$email','$dob','$password','$date','$role')";
                        $insertDbResult = mysqli_query($connect, $insertDb);
                        if ($insertDbResult) {
                            $userInsertedId = mysqli_insert_id($connect);

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
            
            $checkLogin = "SELECT * FROM `tbl_user` WHERE `email`='$email' and `password`='$password'";
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
                    if ($userData['type_id'] == 1) {
                        $_SESSION['wcSessionAdmin'] = session_id();
                        header("Location: ../adminDashboard.php");
                        die();
                    } 
                    else if ($userData['type_id'] == 2){
                        $_SESSION['wcSession'] = session_id();
                        header("Location: ../customer_index.php");
                        die();
                    }
                    else if ($userData['type_id'] == 3){
                        $_SESSION['wcSession'] = session_id();
                        header("Location: ../worker_index.php");
                        die();
                    }
                    else {
                        header("Location: ../login.php");
                        die();
                    }
                }
            } else {
                $_SESSION['loginMessage'] = "User Login Failed";
                header("Location: ../index.php");
                die();
            }
        } else {
            $_SESSION['loginMessage'] = "Please fill all fields";
            header("Location: ../login.php");
            die();
        }
    }
}
