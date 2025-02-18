<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
// $config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = $_ENV['MAIL_SMTP_SERVER'] ?? '';
$config['smtp_user'] = $_ENV['MAIL_SMTP_LOGIN'] ?? '';
$config['smtp_pass'] = $_ENV['MAIL_SMTP_PASSWORD'] ?? '';
$config['smtp_crypto'] = $_ENV['MAIL_SMTP_ENCRYPTION'] ?? 'tls'; // 'tls' or 'ssl'
$config['smtp_port'] = $_ENV['MAIL_SMTP_PORT'] ?? 587;
