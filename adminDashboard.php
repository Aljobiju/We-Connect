<?php
include('./config/connect.php');
session_start();
if (isset($_SESSION["wcSessionAdmin"])  != session_id()) {
     header("Location: ./login.php");
    die();
} else {
    
?>
Welcome to Admin Dashboard
<a href="./auth/logoutController.php"><img class="log-out-btn" src="./images/login_icons/power-off-ico.svg" alt="" /></a>
<?php
}
?>