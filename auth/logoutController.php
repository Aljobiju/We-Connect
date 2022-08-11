<?php
session_start();
session_destroy();
unset($_SESSION["wcSession"]);
unset($_SESSION["wcSessionAdmin"]);
header("Location: ../login.php");
?>

