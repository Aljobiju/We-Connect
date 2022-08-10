<?php
session_start();
session_destroy();
unset($_SESSION["wcSession"]);
header("Location: ../login.php");
?>
