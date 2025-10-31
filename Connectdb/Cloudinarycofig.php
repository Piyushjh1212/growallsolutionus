<?php
require 'vendor/autoload.php';

use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => 'your_cloud_name',
        'api_key'    => 'your_api_key',
        'api_secret' => 'your_api_secret',
    ],
    'url' => [
        'secure' => true // Always use HTTPS
    ]
]);
?>
