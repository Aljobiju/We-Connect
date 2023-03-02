<?php
include('../config/connect.php');
session_start();
if (isset($_SESSION["wcSession"]) != session_id()) {
    header("Location: ../login.php");
    die();
}
    

$counter_file = "counter.txt";
$counter = 0;
if(file_exists($counter_file)) {
    $counter = (int)file_get_contents($counter_file);
}
$counter++;
file_put_contents($counter_file, $counter);
// echo "You are visitor number " . $counter;

?>