<?php
// config/config.php

// Secure configuration file.
// IMPORTANT: Place this file OUTSIDE of your public web directory.

return [
    // PHPMailer SMTP Settings
    'smtp' => [
        'host'      => 'smtp.gmail.com',         // Gmail's SMTP server
        'port'      => 587,                      // Use 587 for TLS (recommended) or 465 for SSL
        'username'  => 'ccl19175131@gmail.com', // Your Gmail address
        'password'  => 'htvi fbak jtip gjhm', // IMPORTANT: This is NOT your regular password
    ],

    // Google Sheets API Settingsrm =-rg
    'google_sheets' => [
        'credentials_path' => dirname(__DIR__) . '/credentials.json', // Path to your Google credentials file
        'spreadsheet_id'   => '1CV06Zv0bE47aFHV9lsGRoIZCdHUhHGgj62P0M4GRcAw', // Your Google Sheet ID
    ],

    // Email Addresses
    'email' => [
        'from_address' => 'ccl19175131@gmail.com',
        'from_name'    => 'Champion Cricket League',
        'admin_email'  => 'ccl19175131@gmail.com', // Where to send notifications
    ]
];