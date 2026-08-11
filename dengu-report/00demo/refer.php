<?php
// Define the log file path (in the same directory as this script)
$path_of_visitor_logs = dirname(__FILE__) . "/visitor.log.csv";

// Check if the file exists; if not, create it with header row
if (!file_exists($path_of_visitor_logs)) {
    // Open file for writing (creates the file)
    $handle = fopen($path_of_visitor_logs, 'w');
    if ($handle === false) {
        // Handle error (optional)
        die("Unable to create log file.");
    }
    // Write header columns
    $headers = ['dateTime', 'IP', 'DeviceId', 'Browser', 'deviceType', 'Url'];
    fputcsv($handle, $headers);
    fclose($handle);
}

// --- Collect visitor information ---

// Date/Time
$dateTime = date('Y-m-d H:i:s');

// IP address (use HTTP_X_FORWARDED_FOR if behind a proxy, else REMOTE_ADDR)
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

// DeviceId – generate a unique identifier (stored in a cookie for returning visitors)
// For simplicity, we generate a new random ID each time. To persist, set a cookie.
$deviceId = uniqid('dev_', true);

// Browser and device type detection (simple user-agent parsing)
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// Detect browser name (basic)
$browser = 'Unknown';
if (strpos($userAgent, 'Firefox') !== false) {
    $browser = 'Firefox';
} elseif (strpos($userAgent, 'Chrome') !== false && strpos($userAgent, 'Edg') === false) {
    $browser = 'Chrome';
} elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
    $browser = 'Safari';
} elseif (strpos($userAgent, 'Edge') !== false || strpos($userAgent, 'Edg') !== false) {
    $browser = 'Edge';
} elseif (strpos($userAgent, 'Opera') !== false || strpos($userAgent, 'OPR') !== false) {
    $browser = 'Opera';
} elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) {
    $browser = 'Internet Explorer';
}

// Detect device type (mobile, tablet, desktop)
$deviceType = 'Desktop';
if (preg_match('/Mobile|Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/', $userAgent)) {
    if (preg_match('/Tablet|iPad/', $userAgent)) {
        $deviceType = 'Tablet';
    } else {
        $deviceType = 'Mobile';
    }
}

// Current URL (full URL with query string)
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// --- Append visitor data to CSV ---

// Open file in append mode
$handle = fopen($path_of_visitor_logs, 'a');
if ($handle === false) {
    die("Unable to open log file for writing.");
}

// Prepare data row
$row = [
    $dateTime,
    $ip,
    $deviceId,
    $browser,
    $deviceType,
    $url
];

// Write as CSV line
fputcsv($handle, $row);
fclose($handle);
?>