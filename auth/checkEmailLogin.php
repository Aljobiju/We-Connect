<?php
include '../config/connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

    // validate email

    $email = mysqli_real_escape_string($connect, $_POST['email']);

    $sqlcheck = "SELECT email FROM tbl_register WHERE email = '$email' ";

    $checkResult = $connect->query($sqlcheck);

    // check if email already taken
    if($checkResult->num_rows == 0) {
        echo "Sorry! no account registered with this email. Try signing up.";
    }
    else{
        echo "ok";
    }
}

?>