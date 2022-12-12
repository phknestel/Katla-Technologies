<?php
/*
 * Basic Site Settings and Database Configuration
 */

// Site Settings
$siteName = 'Katla-Technologies';
$siteEmail = 'newsletter@katla-technologies.com';

$siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://';
$siteURL = $siteURL.$_SERVER["SERVER_NAME"].dirname($_SERVER['REQUEST_URI']).'/';

// Database configuration
define('DB_HOST', 'localhost:3306');
define('DB_USERNAME', 'main_user');
define('DB_PASSWORD', 'DB_Katla_DB20');
define('DB_NAME', 'newsletterDB');
?>