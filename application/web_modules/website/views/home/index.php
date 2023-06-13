<?php
// Get the user agent string from $_SERVER
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Create an array with the keywords to check for different devices
$device_keywords = array(
    'iphone',
    'android',
    'ipad',
    'windows phone',
    'Mozilla'
);

// Initialize a variable to store the detected device
$detected_device = 'Unknown';
$cc = "";
// Check if any of the device keywords is present in the user agent string
foreach ($device_keywords as $keyword) {
    if (stripos($user_agent, $keyword) !== false) {
        $detected_device = $keyword;
        break;
    }
}

// Output the detected device
echo 'Detected device: ' . $detected_device;
?>