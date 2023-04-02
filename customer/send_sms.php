<?php
require('../vendor/autoload.php');
use Twilio\Rest\Client;


// Set your Twilio account SID, auth token, and phone number
$accountSid = 'AC873fa34bbcb35a73c5854bae40e2d2dc';
$authToken = '75268c9df6f0f895177a7bd29ec669e5';
$twilioNumber = '+15855231477';
// If the booking data was successfully inserted into the database, send an SMS message using Twilio
$client = new Client($accountSid, $authToken);

$message = $client->messages->create("+919061673186", // to
array(
    "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
    "from" => "+15855231477"
)
);

echo "<script LANGUAGE='JavaScript'>window.alert('Successfully Booked. A Confirmation message is sent to your mobile phone.') ;
    window.location='CustomerDashboard-manage_jobs.php';
    </script>";



?>